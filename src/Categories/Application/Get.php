<?php

namespace prestashop\prestashopWebserviceLib\Categories\Application;

use JMS\Serializer\SerializerBuilder;
use prestashop\prestashopWebserviceLib\Categories\Domain\PrestashopCategory;
use prestashop\prestashopWebserviceLib\Shared\Application\GetAbstract;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\Formats;
use prestashop\prestashopWebserviceLib\Shared\Domain\Resources;

class Get extends GetAbstract
{
    public function __invoke(?Display $display = null, ?Filter $filter = null): PrestashopCategory
    {
        return SerializerBuilder::create()->build()->deserialize(
            $this->getRaw(Resources::CATEGORIES, $display ?? new DisplayFull(), $filter),
            PrestashopCategory::class,
            Formats::XML
        );
    }
}
