<?php

namespace prestashop\prestashopWebserviceLib\Manufacturers\Domain;

use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayAbstract;

class Display extends DisplayAbstract
{
    public function __construct(
        public bool $id = false,
        public bool $active = false,
        public bool $name = false,
        public bool $dateAdd = false,
        public bool $dateUpd = false,
        public bool $description = false,
        public bool $shortDescription = false,
        public bool $metaTitle = false,
        public bool $metaDescription = false,
        public bool $metaKeywords = false
    ) {
    }
}
