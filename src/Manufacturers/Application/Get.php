<?php

namespace prestashop\prestashopWebserviceLib\Manufacturers\Application;

use JMS\Serializer\SerializerBuilder;
use prestashop\prestashopWebserviceLib\Manufacturers\Domain\PrestashopManufacturer;
use prestashop\prestashopWebserviceLib\Shared\Application\GetAbstract;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\Formats;
use prestashop\prestashopWebserviceLib\Shared\Domain\Resources;

class Get extends GetAbstract
{
    public function __invoke(?Display $display = null, ?Filter $filter = null): PrestashopManufacturer
    {
        return SerializerBuilder::create()->build()->deserialize(
            $this->getRaw(Resources::MANUFACTURERS, $display ?? new DisplayFull(), $filter),
            PrestashopManufacturer::class,
            Formats::XML
        );
    }
}
