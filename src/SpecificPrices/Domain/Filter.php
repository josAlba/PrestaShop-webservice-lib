<?php

namespace prestashop\prestashopWebserviceLib\SpecificPrices\Domain;

use prestashop\prestashopWebserviceLib\Shared\Domain\Filter\FilterAbstract;

class Filter extends FilterAbstract
{
    public function __construct(
        public ?string $id = null,
        public ?string $idShop = null,
        public ?string $idCountry = null,
        public ?string $idCurrency = null,
        public ?string $idGroup = null,
        public ?string $idCustomer = null,
        public ?string $idProduct = null,
        public ?string $idProductAttribute = null,
        public ?string $price = null,
        public ?string $fromQuantity = null,
        public ?string $reduction = null,
        public ?string $reductionTax = null,
        public ?string $reductionType = null,
        public ?string $from = null,
        public ?string $to = null
    ) {
    }
}