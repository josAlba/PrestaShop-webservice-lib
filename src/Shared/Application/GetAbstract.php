<?php

namespace prestashop\prestashopWebserviceLib\Shared\Application;

use prestashop\prestashopWebserviceLib\Shared\Domain\Display\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter\Filter;

abstract class GetAbstract
{
    private PrestaShopWebservice $webService;

    public function __construct(string $url, string $key)
    {
        $this->webService = new PrestaShopWebservice($url, $key);
    }

    final public function getRaw(
        string $resource,
        ?Display $display = null,
        ?Filter $filter = null,
        array $queryExtra = []
    ): string {
        return $this->webService->get($resource, $display ?? new DisplayFull(), $filter, $queryExtra);
    }
}