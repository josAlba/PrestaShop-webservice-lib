<?php

namespace prestashop\prestashopWebserviceLib\Combinations\Application;

use JMS\Serializer\SerializerBuilder;
use prestashop\prestashopWebserviceLib\Combinations\Domain\PrestashopCombination;
use prestashop\prestashopWebserviceLib\Shared\Application\GetAbstract;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\Formats;
use prestashop\prestashopWebserviceLib\Shared\Domain\Resources;

class Get extends GetAbstract
{
    public function __invoke(Display $display = new DisplayFull(), ?Filter $filter = null): PrestashopCombination
    {
        return SerializerBuilder::create()->build()->deserialize(
            $this->getRaw(Resources::COMBINATIONS->value, $display, $filter),
            PrestashopCombination::class,
            Formats::XML->value
        );
    }
}