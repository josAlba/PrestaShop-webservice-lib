<?php

namespace prestashop\prestashopWebserviceLib\Shared\Application;

use prestashop\prestashopWebserviceLib\Shared\Domain\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\Resources;

abstract class GetAbstract
{
    protected PrestaShopWebservice $webService;

    public function __construct(string $url, string $key)
    {
        $this->webService = new PrestaShopWebservice($url, $key);
    }

    final public function getRaw(string $resource, Display $display = new DisplayFull(), ?Filter $filter = null): string
    {
        return $this->webService->get($resource, $display, $filter);
    }
}