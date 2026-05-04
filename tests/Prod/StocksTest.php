<?php

namespace prestashop\prestashopWebserviceLib\Tests\Prod;

use PHPUnit\Framework\TestCase;
use prestashop\prestashopWebserviceLib\Shared\Domain\ShopParam;
use prestashop\prestashopWebserviceLib\StockAvailables\Application\Put;
use prestashop\prestashopWebserviceLib\StockAvailables\Domain\PrestashopStockAvailableUpdate;
use prestashop\prestashopWebserviceLib\StockAvailables\Domain\StockAvailable;

/**
 * @group ignored-group
 */
class StocksTest extends TestCase
{
    public function test(): void
    {
        $p = new Put('{{url}}', '{{token}}');

        $result = $p(
            new PrestashopStockAvailableUpdate(
                new StockAvailable('4200', '747', '0', quantity: '1')
            ),
            new ShopParam(1)
        );

        dd($result);
    }
}