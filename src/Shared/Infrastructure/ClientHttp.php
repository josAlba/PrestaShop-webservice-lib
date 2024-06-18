<?php

namespace prestashop\prestashopWebserviceLib\Shared\Infrastructure;

use GuzzleHttp\Client;
use RuntimeException;
use Throwable;

class ClientHttp
{
    private Client $client;

    public function __construct(string $uri, array $headers)
    {
        $this->client = new Client(['base_uri' => $uri, 'headers' => $headers,]);
    }

    /**
     * @param string $url
     * @param array $query
     * @param string $body
     *
     * @return string
     */
    public function post(string $url, array $query, string $body): string
    {
        try {
            $response = $this->client->post($url, ['query' => $query, 'body' => $body,]);

            return $response->getBody()->getContents();
        } catch (Throwable $exception) {
            throw new RuntimeException($exception->getMessage());
        }
    }

    /**
     * @param string $url
     * @param array $query
     *
     * @return string
     */
    public function get(string $url, array $query): string
    {
        try {
            $response = $this->client->get($url, ['query' => $query]);

            return $response->getBody()->getContents();
        } catch (Throwable $exception) {
            throw new RuntimeException($exception->getMessage());
        }
    }

    /**
     * @param string $url
     * @param array $query
     * @param string $body
     *
     * @return string
     */
    public function put(string $url, array $query, string $body): string
    {
        try {
            $response = $this->client->put($url, [
                'query' => $query,
                'body' => $body,
            ]);

            return $response->getBody()->getContents();
        } catch (Throwable $exception) {
            throw new RuntimeException($exception->getMessage());
        }
    }

    /**
     * @param string $url
     * @param array $query
     *
     * @return bool
     */
    public function delete(string $url, array $query): bool
    {
        try {
            $this->client->delete($url, ['query' => $query]);
        } catch (Throwable) {
            return false;
        }

        return true;
    }
}