<?php

namespace prestashop\prestashopWebserviceLib\Combinations\Application;

use JMS\Serializer\SerializerBuilder;
use prestashop\prestashopWebserviceLib\Products\Domain\PrestashopProduct;
use prestashop\prestashopWebserviceLib\Shared\Application\AbstractWebService;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\Formats;

class Get extends AbstractWebService
{
    public function getAll(Display $display = new DisplayFull(), ?Filter $filter = null): PrestashopProduct
    {
        return SerializerBuilder::create()->build()->deserialize(
            $this->getRaw($display, $filter),
            PrestashopProduct::class,
            Formats::XML->value
        );
    }
}