<?php

namespace prestashop\prestashopWebserviceLib\Tests\Images\Domain;

use PHPUnit\Framework\TestCase;
use prestashop\prestashopWebserviceLib\Images\Domain\PrestashopImages;
use prestashop\prestashopWebserviceLib\StockAvaliables\Domain\PrestashopStockAvailable;
use prestashop\prestashopWebserviceLib\StockAvaliables\Domain\StockAvailable;

class PrestashopImagesTest extends TestCase
{
    public function testSerializeXML(): void
    {
        $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
    <image id="21">
        <declination id="24" xlink:href="https://local.local/api/images/products/21/24"/>
        <declination id="25" xlink:href="https://local.local/api/images/products/21/25"/>
        <declination id="26" xlink:href="https://local.local/api/images/products/21/26"/>
        <declination id="27" xlink:href="https://local.local/api/images/products/21/27"/>
        <declination id="253" xlink:href="https://local.local/api/images/products/21/253"/>
    </image>
</prestashop>
XML;

        $prestashopImages = PrestashopImages::byXml($xml);

        self::assertNotEmpty($prestashopImages->images);
        self::assertEquals(
            'https://local.local/api/images/products/21/24',
            $prestashopImages->images[0]->declinations[0]->href
        );
    }
}