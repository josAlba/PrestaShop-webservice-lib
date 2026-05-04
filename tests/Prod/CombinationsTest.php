<?php

namespace prestashop\prestashopWebserviceLib\Tests\Prod;

use PHPUnit\Framework\TestCase;
use prestashop\prestashopWebserviceLib\Combinations\Application\Get;
use prestashop\prestashopWebserviceLib\Combinations\Domain\Filter;

/**
 * @group ignored-group
 */
class CombinationsTest extends TestCase
{
    public function test(): void
    {
        $p = (new Get('https://benisport.es', 'QD55HUB99TQC4HDGMMR43JBWS39RVKLY'))->__invoke(
            null,
            new Filter(
                id: '224',
                idProduct: '44'
            ),
        );

        dd($p->combinations);
    }
}