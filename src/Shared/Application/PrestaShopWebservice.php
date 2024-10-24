<?php

namespace prestashop\prestashopWebserviceLib\Shared\Application;

use prestashop\prestashopWebserviceLib\Shared\Domain\Display\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\Item\PrestashopItemUpdate;
use prestashop\prestashopWebserviceLib\Shared\Domain\ShopParam;
use prestashop\prestashopWebserviceLib\Shared\Infrastructure\ClientHttp;

class PrestaShopWebservice
{
    private ClientHttp $client;

    public function __construct(string $url, string $key)
    {
        $encodedAuth = base64_encode($key.":");

        $this->client = new ClientHttp(
            $url.'/api/',
            [
                'Authorization' => 'Basic '.$encodedAuth,
            ]
        );
    }

    public function get(
        string $resource,
        ?Display $display = null,
        ?Filter $filter = null,
        array $queryExtra = []
    ): string {
        $display = $display ?? new DisplayFull();

        $query = ['display' => (string)$display];

        if ($filter !== null) {
            $query += $filter->getFilterQuery();
        }

        if (!empty($queryExtra)) {
            $query += $queryExtra;
        }

        return $this->client->get($resource, $query);
    }

    public function edit(string $resource, PrestashopItemUpdate $item, ShopParam $shopParam): string
    {
        return $this->client->put($resource, $shopParam->getQuery(), $item->__toString());
    }
}