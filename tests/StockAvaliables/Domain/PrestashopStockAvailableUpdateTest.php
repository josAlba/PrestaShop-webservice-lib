<?php

namespace prestashop\prestashopWebserviceLib\Tests\StockAvaliables\Domain;

use PHPUnit\Framework\TestCase;
use prestashop\prestashopWebserviceLib\StockAvaliables\Domain\PrestashopStockAvailableUpdate;
use prestashop\prestashopWebserviceLib\StockAvaliables\Domain\StockAvailable;

class PrestashopStockAvailableUpdateTest extends TestCase
{
    public function testSerializeXML(): void
    {
        $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
    <stock_available>
        <id><![CDATA[1]]></id>
        <quantity><![CDATA[10]]></quantity>
    </stock_available>
</prestashop>
XML;

        $stockAvailable = new PrestashopStockAvailableUpdate(new StockAvailable(id: '1', quantity: '10'));

        $stockAvailableXml = PrestashopStockAvailableUpdate::byXml($xml);

        self::assertNotEmpty($stockAvailableXml->stockAvailable);
        self::assertEquals($stockAvailableXml->stockAvailable[0]->id, $stockAvailable->stockAvailable[0]->id);
        self::assertEquals(
            $stockAvailableXml->stockAvailable[0]->quantity,
            $stockAvailable->stockAvailable[0]->quantity
        );
    }
}