#!/usr/bin/env php
<?php

include_once __DIR__.'/../vendor/autoload.php';

$wsdlEndpoint           = 'https://e-nadawca.poczta-polska.pl/websrv/en.wsdl';
$typesDir               = __DIR__.'/../src/Type';
$wsdlFile               = __DIR__.'/../var/en.wsdl';
$schemaFile             = __DIR__.'/../var/schema.xsd';
$configFile             = __DIR__.'/../config.yaml';
$classMapFile           = __DIR__.'/../src/ENadawcaClassmap.php';
$clientClassMethodsFile = __DIR__.'/../src/ENadawcaClientMethods.php';

// download wsdl
exec("curl {$wsdlEndpoint} -s -o {$wsdlFile}");
echo "wsdl file loaded\n";

// Create schema file
$wsdlDom = new \DOMDocument('1.0', 'UTF-8');
$wsdlDom->load($wsdlFile);
$wsdlDom   = $wsdlDom->documentElement;
$xmlns_tns = $wsdlDom->getAttribute('xmlns:tns');
/** @var DOMElement $typesNode */
$typesNode = $wsdlDom->getElementsByTagName('types')->item(0);
/** @var \DOMElement $schemaNode */
$schemaNode = $typesNode->getElementsByTagName('schema')->item(0);
$schemaNode->setAttribute('xmlns:tns', $xmlns_tns);
$schemaDom = new \DOMDocument('1.0', 'UTF-8');
$schemaDom->importNode($schemaNode);
$schemaDom->appendChild($schemaDom->importNode($schemaNode, true));
$schemaDom->preserveWhiteSpace = false;
$schemaDom->formatOutput       = true;
$schemaDom->save($schemaFile);
echo "schema.xsd file generated\n";

// create types
exec(__DIR__."/../vendor/bin/xsd2php convert '{$configFile}' '{$schemaFile}'");
echo "created types\n";

// change types private to protected
chdir($typesDir); // probably add some error handling around this
foreach (glob('*.php') as $typeClassFile) {
    $code = file_get_contents($typeClassFile);
    $code = str_replace('private $', 'protected $', $code);
    file_put_contents($typeClassFile, $code);
}
echo "changed types private properties to protected\n";

// create classmap
chdir($typesDir); // probably add some error handling around this
$classMap = [];
foreach (glob('*.php') as $type) {
    $className       = substr($type, 0, strlen($type) - 4);
    $type            = lcfirst($className);
    $classMap[$type] = $className;
}

$classMapClass = <<<'TEXT'
<?php

namespace Abryb\ENadawca;

class ENadawcaClassmap 
{
    public static function getClassMap() : array
    {
        return [

TEXT;
foreach ($classMap as $type => $class) {
    $classMapClass .= str_repeat(' ', 3 * 4)."'{$type}' => Type\\{$class}::class,\n";
}
$classMapClass .= <<<'TEXT'
        ];
    }
}
TEXT;

file_put_contents($classMapFile, $classMapClass);
echo "created classmap\n";

// create client methods
/** @var DOMElement $portTypeNode */
$portTypeNode = $wsdlDom->getElementsByTagName('portType')->item(0);

$methods = [];
foreach ($portTypeNode->getElementsByTagName('operation') as $operationNode) {
    /** @var DOMElement $operationNode */
    $name      = $operationNode->getAttribute('name');
    $methods[] = $name;
}

$clientMethodsClass = <<<'TEXT'
<?php

namespace Abryb\ENadawca;

trait ENadawcaClientMethods 
{
    abstract protected function callMethod(string $method, $arguments);


TEXT;
foreach ($methods as $method) {
    $methodUp = ucfirst($method);
    $clientMethodsClass .= <<<TEXT
    public function {$method}(Type\\{$methodUp} \$request) : Type\\{$methodUp}Response
    {
        return \$this->callMethod('{$method}', \$request);
    }


TEXT;
}
$clientMethodsClass .= <<<'TEXT'
}
TEXT;

file_put_contents($clientClassMethodsFile, $clientMethodsClass);
