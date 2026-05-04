<?php

namespace prestashop\prestashopWebserviceLib\Tests\Prod;

use PHPUnit\Framework\TestCase;
use prestashop\prestashopWebserviceLib\SpecificPrices\Application\Get;
use prestashop\prestashopWebserviceLib\SpecificPrices\Domain\Filter as SpecificPricesFilter;

/**
 * @group ignored-group
 */
class SpecificPricesTest extends TestCase
{
    public function test(): void
    {
        $p = (new Get('https://benisport.es', 'QD55HUB99TQC4HDGMMR43JBWS39RVKLY'))->__invoke(
            null,
            new SpecificPricesFilter(
                idProduct: '44',
            ),
        );

        dd($p->specificPrices);
    }
}