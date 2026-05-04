<?php

namespace prestashop\prestashopWebserviceLib\Tests\Carts\Domain;

use PHPUnit\Framework\TestCase;
use prestashop\prestashopWebserviceLib\Carts\Domain\PrestashopCart;
use prestashop\prestashopWebserviceLib\Carts\Domain\Cart;

class PrestashopCartTest extends TestCase
{
    public function testSerializeXML(): void
    {
        $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
    <carts>
        <cart>
            <id><![CDATA[5]]></id>
            <id_customer><![CDATA[10]]></id_customer>
        </cart>
    </carts>
</prestashop>
XML;

        $cartObject = new PrestashopCart(
            [
                new Cart(id: '5', idCustomer: '10'),
            ]
        );

        $cartXml = PrestashopCart::byXml($xml);

        self::assertNotEmpty($cartXml->carts);
        self::assertEquals($cartXml->carts[0]->id, $cartObject->carts[0]->id);
        self::assertEquals($cartXml->carts[0]->idCustomer, $cartObject->carts[0]->idCustomer);
    }
}
