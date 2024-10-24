<?php

namespace prestashop\prestashopWebserviceLib\Country\Application;

use JMS\Serializer\SerializerBuilder;
use prestashop\prestashopWebserviceLib\Country\Domain\PrestashopCountries;
use prestashop\prestashopWebserviceLib\Shared\Application\GetAbstract;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\Formats;
use prestashop\prestashopWebserviceLib\Shared\Domain\Resources;

class Get extends GetAbstract
{
    public function __invoke(int $id, ?Display $display = null, ?Filter $filter = null): PrestashopCountries
    {
        return SerializerBuilder::create()->build()->deserialize(
            $this->getRaw(Resources::COUNTRIES.'/'.$id, $display ?? new DisplayFull(), $filter),
            PrestashopCountries::class,
            Formats::XML
        );
    }
}