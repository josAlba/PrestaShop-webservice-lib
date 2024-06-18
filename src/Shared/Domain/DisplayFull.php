<?php

namespace prestashop\prestashopWebserviceLib\Shared\Domain;

class DisplayFull implements Display
{
    public function toPrimitive(): array
    {
        return [];
    }

    public function __toString(): string
    {
        return 'full';
    }
}