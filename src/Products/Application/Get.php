<?php

namespace prestashop\prestashopWebserviceLib\Products\Application;

use JMS\Serializer\SerializerBuilder;
use prestashop\prestashopWebserviceLib\Products\Domain\PrestashopProduct;
use prestashop\prestashopWebserviceLib\Shared\Application\GetAbstract;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\Formats;
use prestashop\prestashopWebserviceLib\Shared\Domain\Resources;

class Get extends GetAbstract
{
    public function __invoke(Display $display = new DisplayFull(), ?Filter $filter = null): PrestashopProduct
    {
        return SerializerBuilder::create()->build()->deserialize(
            $this->getRaw(Resources::PRODUCTS->value,$display, $filter),
            PrestashopProduct::class,
            Formats::XML->value
        );
    }
}