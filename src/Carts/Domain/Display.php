<?php

namespace prestashop\prestashopWebserviceLib\Carts\Domain;

use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayAbstract;

class Display extends DisplayAbstract
{
    public function __construct(
        public bool $id = false,
        public bool $idAddressDelivery = false,
        public bool $idAddressInvoice = false,
        public bool $idCurrency = false,
        public bool $idCustomer = false,
        public bool $idGuest = false,
        public bool $idLang = false,
        public bool $idShopGroup = false,
        public bool $idShop = false,
        public bool $idCarrier = false,
        public bool $recyclable = false,
        public bool $gift = false,
        public bool $giftMessage = false,
        public bool $mobileTheme = false,
        public bool $deliveryOption = false,
        public bool $secureKey = false,
        public bool $allowSeperatedPackage = false,
        public bool $dateAdd = false,
        public bool $dateUpd = false
    ) {
    }
}
