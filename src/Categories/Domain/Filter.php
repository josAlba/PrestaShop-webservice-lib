<?php

namespace prestashop\prestashopWebserviceLib\Categories\Domain;

use prestashop\prestashopWebserviceLib\Shared\Domain\Filter\FilterAbstract;

class Filter extends FilterAbstract
{
    public function __construct(
        public ?string $id = null,
        public ?string $idParent = null,
        public ?string $levelDepth = null,
        public ?string $active = null,
        public ?string $idShopDefault = null,
        public ?string $isRootCategory = null,
        public ?string $position = null,
        public ?string $dateAdd = null,
        public ?string $dateUpd = null,
        public ?string $name = null,
        public ?string $linkRewrite = null,
        public ?string $description = null,
        public ?string $metaTitle = null,
        public ?string $metaDescription = null,
        public ?string $metaKeywords = null
    ) {
    }
}
