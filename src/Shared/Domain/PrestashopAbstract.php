<?php

namespace prestashop\prestashopWebserviceLib\Shared\Domain;

use JMS\Serializer\SerializerBuilder;

abstract class PrestashopAbstract implements PrestashopInterface
{
    public function __toString(): string
    {
        return SerializerBuilder::create()->build()->serialize($this, Formats::XML->value);
    }

    public static function byXml(string $xml): static
    {
        return SerializerBuilder::create()->build()->deserialize($xml, static::class, Formats::XML->value);
    }
}