<?php

namespace prestashop\prestashopWebserviceLib\StockAvaliables\Application;

use JMS\Serializer\SerializerBuilder;
use prestashop\prestashopWebserviceLib\Shared\Application\GetAbstract;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\Formats;
use prestashop\prestashopWebserviceLib\Shared\Domain\Resources;
use prestashop\prestashopWebserviceLib\StockAvaliables\Domain\PrestashopStockAvailable;

class Get extends GetAbstract
{
    public function __invoke(Display $display = new DisplayFull(), ?Filter $filter = null): PrestashopStockAvailable
    {
        return SerializerBuilder::create()->build()->deserialize(
            $this->getRaw(Resources::STOCK_AVAILABLES->value,$display, $filter),
            PrestashopStockAvailable::class,
            Formats::XML->value
        );
    }
}