<?php

namespace prestashop\prestashopWebserviceLib\Manufacturers\Domain;

use prestashop\prestashopWebserviceLib\Shared\Domain\Filter\FilterAbstract;

class Filter extends FilterAbstract
{
    public function __construct(
        public ?string $id = null,
        public ?string $active = null,
        public ?string $name = null,
        public ?string $dateAdd = null,
        public ?string $dateUpd = null
    ) {
    }
}
