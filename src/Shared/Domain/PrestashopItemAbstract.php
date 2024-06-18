<?php

namespace prestashop\prestashopWebserviceLib\Shared\Domain;

use JMS\Serializer\SerializerBuilder;

abstract class PrestashopItemAbstract implements PrestashopItemInterface
{
    public function __toString(): string
    {
        return SerializerBuilder::create()->build()->serialize($this, Formats::XML->value);
    }

    public function __serialize(): array
    {
        return [];
    }
}