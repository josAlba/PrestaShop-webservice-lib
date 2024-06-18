<?php

namespace prestashop\prestashopWebserviceLib\StockAvaliables\Application;

use JMS\Serializer\SerializerBuilder;
use prestashop\prestashopWebserviceLib\Shared\Application\AbstractWebService;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\Formats;
use prestashop\prestashopWebserviceLib\StockAvaliables\Domain\PrestashopStockAvailable;

class Get extends AbstractWebService
{
    public function getAll(Display $display = new DisplayFull(), ?Filter $filter = null): string
    {
        return SerializerBuilder::create()->build()->deserialize(
            $this->getRaw($display, $filter),
            PrestashopStockAvailable::class,
            Formats::XML->value
        );
    }
}