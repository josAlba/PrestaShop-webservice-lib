<?php

namespace prestashop\prestashopWebserviceLib\Shared\Application;

use prestashop\prestashopWebserviceLib\Shared\Domain\Display;
use prestashop\prestashopWebserviceLib\Shared\Domain\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter;
use prestashop\prestashopWebserviceLib\Shared\Domain\PrestashopInterface;
use prestashop\prestashopWebserviceLib\Shared\Domain\PrestashopItemInterface;
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

    public function add(string $resource, PrestashopInterface $prestashop, ShopParam $shopParam): string
    {
        return $this->client->post($resource, $shopParam->getQuery(), $prestashop->__toString());
    }

    public function get(
        string $resource,
        Display $display = new DisplayFull(),
        ?Filter $filter = null
    ): string {
        $query = ['display' => (string)$display];

        if ($filter !== null) {
            $query += $filter->getFilterQuery();
        }

        return $this->client->get($resource, $query);
    }

    public function edit(string $resource, PrestashopInterface $prestashop, ShopParam $shopParam): string
    {
        return $this->client->put($resource, $shopParam->getQuery(), $prestashop->__toString());
    }

    public function delete(string $resource, array $ids, ShopParam $shopParam): bool
    {
        $query = array_merge(['id' => implode(',', $ids),], $shopParam->getQuery());

        $this->client->delete($resource, ['query' => array_filter($query)]);

        return true;
    }
}