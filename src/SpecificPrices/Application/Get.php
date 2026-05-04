<?php

namespace prestashop\prestashopWebserviceLib\SpecificPrices\Application;

use JMS\Serializer\SerializerBuilder;
use prestashop\prestashopWebserviceLib\Shared\Application\GetAbstract;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\Formats;
use prestashop\prestashopWebserviceLib\Shared\Domain\Resources;
use prestashop\prestashopWebserviceLib\SpecificPrices\Domain\PrestashopSpecificPrice;

class Get extends GetAbstract
{
    public function __invoke(?Display $display = null, ?Filter $filter = null): PrestashopSpecificPrice
    {
        return SerializerBuilder::create()->build()->deserialize(
            $this->getRaw(Resources::SPECIFIC_PRICES, $display ?? new DisplayFull(), $filter),
            PrestashopSpecificPrice::class,
            Formats::XML
        );
    }
}