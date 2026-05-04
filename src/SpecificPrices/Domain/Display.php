<?php

namespace prestashop\prestashopWebserviceLib\SpecificPrices\Domain;

use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayAbstract;

class Display extends DisplayAbstract
{
    public function __construct(
        public bool $id = false,
        public bool $idShop = false,
        public bool $idCountry = false,
        public bool $idCurrency = false,
        public bool $idGroup = false,
        public bool $idCustomer = false,
        public bool $idProduct = false,
        public bool $idProductAttribute = false,
        public bool $price = false,
        public bool $fromQuantity = false,
        public bool $reduction = false,
        public bool $reductionTax = false,
        public bool $reductionType = false,
        public bool $from = false,
        public bool $to = false
    ) {
    }
}