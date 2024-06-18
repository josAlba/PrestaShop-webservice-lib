<?php

namespace prestashop\prestashopWebserviceLib\Shared\Domain;

interface PrestashopItemInterface
{
    public function __serialize(): array;

    public function __toString(): string;
}