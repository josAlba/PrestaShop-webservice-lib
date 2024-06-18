<?php

namespace prestashop\prestashopWebserviceLib\Shared\Domain;

interface Display
{
    public function toPrimitive(): array;

    public function __toString(): string;
}