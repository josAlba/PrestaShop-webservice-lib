<?php

namespace prestashop\prestashopWebserviceLib\Tests\Manufacturers\Domain;

use PHPUnit\Framework\TestCase;
use prestashop\prestashopWebserviceLib\Manufacturers\Domain\PrestashopManufacturer;
use prestashop\prestashopWebserviceLib\Manufacturers\Domain\Manufacturer;

class PrestashopManufacturerTest extends TestCase
{
    public function testSerializeXML(): void
    {
        $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
    <manufacturers>
        <manufacturer>
            <id><![CDATA[1]]></id>
            <name><![CDATA[PrestaShop]]></name>
        </manufacturer>
    </manufacturers>
</prestashop>
XML;

        $manufacturerObject = new PrestashopManufacturer(
            [
                new Manufacturer(id: '1', name: 'PrestaShop'),
            ]
        );

        $manufacturerXml = PrestashopManufacturer::byXml($xml);

        self::assertNotEmpty($manufacturerXml->manufacturers);
        self::assertEquals($manufacturerXml->manufacturers[0]->id, $manufacturerObject->manufacturers[0]->id);
        self::assertEquals($manufacturerXml->manufacturers[0]->name, $manufacturerObject->manufacturers[0]->name);
    }
}
