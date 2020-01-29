#!/usr/bin/env php
<?php

include_once __DIR__.'/../vendor/autoload.php';

const ROOT_DIR = __DIR__.'/..';
const VAR_DIR  = ROOT_DIR.'/var';
const SRC_DIR  = ROOT_DIR.'/src';

$WSDL_ENDPOINT             = 'https://e-nadawca.poczta-polska.pl/websrv/en.wsdl';
$TYPE_DIR                  = SRC_DIR.'/Type';
$WSDL_FILE                 = VAR_DIR.'/en.wsdl';
$SCHEMA_FILE               = VAR_DIR.'/schema.xsd';
$CONFIG_FILE               = ROOT_DIR.'/config.yaml';
$CLASSMAP_FILE             = SRC_DIR.'/ENadawcaClassmap.php';
$CLIENT_CLASS_METHODS_FILE = SRC_DIR.'/ENadawcaClientMethods.php';
$ENUM_DIR                  = SRC_DIR.'/Enum';

// download wsdl
exec("curl {$WSDL_ENDPOINT} -s -o {$WSDL_FILE}");
echo "wsdl file loaded\n";

// Create schema file
$wsdlDom = new \DOMDocument('1.0', 'UTF-8');
$wsdlDom->load($WSDL_FILE);
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
$schemaDom->save($SCHEMA_FILE);
echo "schema.xsd file generated\n";

// create types
exec(__DIR__."/../vendor/bin/xsd2php convert '{$CONFIG_FILE}' '{$SCHEMA_FILE}'");
echo "created types\n";

// change types private to protected
chdir($TYPE_DIR); // probably add some error handling around this
foreach (glob('*.php') as $typeClassFile) {
    $code = file_get_contents($typeClassFile);
    $code = str_replace('private $', 'protected $', $code);
    file_put_contents($typeClassFile, $code);
}
echo "changed types private properties to protected\n";

// create classmap
chdir($TYPE_DIR); // probably add some error handling around this
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

file_put_contents($CLASSMAP_FILE, $classMapClass);
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

file_put_contents($CLIENT_CLASS_METHODS_FILE, $clientMethodsClass);

// create enum classes
$simpleTypes = $schemaDom->getElementsByTagName('simpleType');

$enums = [];
foreach ($simpleTypes as $simpleType) {
    /** @var DOMElement $simpleType */
    $enumName     = $simpleType->getAttribute('name');
    $restrictions = $simpleType->getElementsByTagName('restriction');
    foreach ($restrictions as $restriction) {
        /** @var DOMElement $restriction */
        $enum = [];
        foreach ($restriction->getElementsByTagName('enumeration') as $enumeration) {
            /** @var DOMElement $enumeration */
            $enum[] = $enumeration->getAttribute('value');
        }
        if (!empty($enum)) {
            $enums[$enumName] = $enum;

            break;
        }
    }
}

@mkdir($ENUM_DIR);
chdir($ENUM_DIR);
foreach ($enums as $name => $enum) {
    $className = ucfirst($name);
    $class     = <<<TEXT
<?php

namespace Abryb\\ENadawca\\Enum;

class {$className} {

TEXT;
    foreach ($enum as $value) {
        $class .= "    const {$value} = '{$value}';\n";
    }
    $class .= <<<'TEXT'
}
TEXT;

    file_put_contents("{$className}.php", $class);
}

echo "creted enums for simple types\n";
