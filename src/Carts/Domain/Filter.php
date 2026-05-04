<?php

namespace prestashop\prestashopWebserviceLib\Carts\Domain;

use prestashop\prestashopWebserviceLib\Shared\Domain\Filter\FilterAbstract;

class Filter extends FilterAbstract
{
    public function __construct(
        public ?string $id = null,
        public ?string $idAddressDelivery = null,
        public ?string $idAddressInvoice = null,
        public ?string $idCurrency = null,
        public ?string $idCustomer = null,
        public ?string $idGuest = null,
        public ?string $idLang = null,
        public ?string $idShopGroup = null,
        public ?string $idShop = null,
        public ?string $idCarrier = null,
        public ?string $dateAdd = null,
        public ?string $dateUpd = null
    ) {
    }
}
