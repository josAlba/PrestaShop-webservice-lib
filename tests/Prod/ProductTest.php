<?php

namespace prestashop\prestashopWebserviceLib\Tests\Prod;

use PHPUnit\Framework\TestCase;
use prestashop\prestashopWebserviceLib\Products\Application\Get;
use prestashop\prestashopWebserviceLib\Products\Domain\Filter;

/**
 * @group ignored-group
 */
class ProductTest extends TestCase
{
    public function test(): void
    {
        $p = (new Get('https://benisport.es', 'QD55HUB99TQC4HDGMMR43JBWS39RVKLY'))->__invoke(
            null,
            new Filter(
                id: '44',
            ),
        );

        dd($p->products);
    }
}