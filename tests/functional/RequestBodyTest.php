<?php

declare(strict_types=1);


namespace Abryb\ENadawca\Tests\functional;


use Abryb\ENadawca\ENadawcaClient;
use Abryb\ENadawca\ENadawcaClientFactory;
use PHPUnit\Framework\TestCase;
use Abryb\ENadawca\Type;

/**
 * @author Błażej Rybarkiewicz <b.rybarkiewicz@gmail.com>
 */
class RequestBodyTest extends TestCase
{
    /**
     * @var ENadawcaClient
     */
    private static $client;

    public static function setUpBeforeClass(): void
    {
        self::$client = ENadawcaClientFactory::createClient(
            __DIR__ . "/../fixtures/en.wsdl",
            'username',
            'password',
            []
        );
    }

    public function testCanSendInheritedProperties()
    {
        $p1 = new Type\PrzesylkaPoleconaKrajowaType();
        $p1->setZasadySpecjalne('aaa');
        $p1->setNumerNadania('1');
        $p1->setAdres(new Type\AdresType());

        $p2 = new Type\ListBiznesowyType();
        $p2->setMasa(1);

        $s = new Type\AddShipment();

        $s->addToPrzesylki($p1);
        $s->addToPrzesylki($p2);

        try {
            self::$client->addShipment($s);
        } catch (\Throwable $e) {
            $expected = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope 
xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" 
xmlns:ns1="http://e-nadawca.poczta-polska.pl" 
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
  <SOAP-ENV:Body>
    <ns1:addShipment>
      <przesylki numerNadania="1" zasadySpecjalne="aaa" xsi:type="ns1:przesylkaPoleconaKrajowaType">
        <adres/>
      </przesylki>
      <przesylki masa="1" xsi:type="ns1:listBiznesowyType"/>
    </ns1:addShipment>
  </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
XML;
            $this->assertXmlStringEqualsXmlString($expected, self::$client->_lastRequestInfo()->getRequestBody());
        }
    }
}