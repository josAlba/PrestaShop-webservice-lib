<?php

namespace prestashop\prestashopWebserviceLib\Invoices\Application;

use JMS\Serializer\SerializerBuilder;
use prestashop\prestashopWebserviceLib\Invoices\Domain\PrestashopOrder;
use prestashop\prestashopWebserviceLib\Shared\Application\GetAbstract;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\Formats;
use prestashop\prestashopWebserviceLib\Shared\Domain\Resources;

class Get extends GetAbstract
{
    public function __invoke(?Display $display = null, ?Filter $filter = null): PrestashopOrder
    {
        return SerializerBuilder::create()->build()->deserialize(
            $this->getRaw(Resources::ORDERS, $display ?? new DisplayFull(), $filter),
            PrestashopOrder::class,
            Formats::XML
        );
    }
}