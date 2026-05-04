<?php

namespace prestashop\prestashopWebserviceLib\Carts\Application;

use JMS\Serializer\SerializerBuilder;
use prestashop\prestashopWebserviceLib\Carts\Domain\PrestashopCart;
use prestashop\prestashopWebserviceLib\Shared\Application\GetAbstract;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\Formats;
use prestashop\prestashopWebserviceLib\Shared\Domain\Resources;

class Get extends GetAbstract
{
    public function __invoke(?Display $display = null, ?Filter $filter = null): PrestashopCart
    {
        return SerializerBuilder::create()->build()->deserialize(
            $this->getRaw(Resources::CARTS, $display ?? new DisplayFull(), $filter),
            PrestashopCart::class,
            Formats::XML
        );
    }
}
