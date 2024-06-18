<?php

namespace prestashop\prestashopWebserviceLib\Shared\Domain;

interface Filter
{
    public function getFilterQuery(): array;
}