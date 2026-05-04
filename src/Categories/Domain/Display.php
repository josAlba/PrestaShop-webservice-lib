<?php

namespace prestashop\prestashopWebserviceLib\Categories\Domain;

use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayAbstract;

class Display extends DisplayAbstract
{
    public function __construct(
        public bool $id = false,
        public bool $idParent = false,
        public bool $levelDepth = false,
        public bool $active = false,
        public bool $idShopDefault = false,
        public bool $isRootCategory = false,
        public bool $position = false,
        public bool $dateAdd = false,
        public bool $dateUpd = false,
        public bool $name = false,
        public bool $linkRewrite = false,
        public bool $description = false,
        public bool $metaTitle = false,
        public bool $metaDescription = false,
        public bool $metaKeywords = false
    ) {
    }
}
