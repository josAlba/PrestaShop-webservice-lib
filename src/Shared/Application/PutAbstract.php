<?php

namespace prestashop\prestashopWebserviceLib\Shared\Application;

use prestashop\prestashopWebserviceLib\Shared\Domain\Item\PrestashopItemUpdate;
use prestashop\prestashopWebserviceLib\Shared\Domain\ShopParam;

abstract class PutAbstract
{
    private PrestaShopWebservice $webService;

    public function __construct(string $url, string $key)
    {
        $this->webService = new PrestaShopWebservice($url, $key);
    }

    final public function put(string $resource, PrestashopItemUpdate $item, ShopParam $shopParam): void
    {
        $this->webService->edit($resource, $item, $shopParam);
    }
}