<?php

namespace prestashop\prestashopWebserviceLib\Products\Domain;

use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayAbstract;

class Display extends DisplayAbstract
{
    public function __construct(
        public bool $id = false,
        public bool $idManufacturer = false,
        public bool $idSupplier = false,
        public bool $idCategoryDefault = false,
        public bool $new = false,
        public bool $cacheDefaultAttribute = false,
        public bool $idDefaultImage = false,
        public bool $idDefaultCombination = false,
        public bool $idTaxRulesGroup = false,
        public bool $positionInCategory = false,
        public bool $manufacturerName = false,
        public bool $quantity = false,
        public bool $type = false,
        public bool $idShopDefault = false,
        public bool $reference = false,
        public bool $supplierReference = false,
        public bool $location = false,
        public bool $width = false,
        public bool $height = false,
        public bool $depth = false,
        public bool $weight = false,
        public bool $quantityDiscount = false,
        public bool $ean13 = false,
        public bool $isbn = false,
        public bool $upc = false,
        public bool $cacheIsPack = false,
        public bool $cacheHasAttachments = false,
        public bool $isVirtual = false,
        public bool $state = false,
        public bool $additionalDeliveryTimes = false,
        public bool $deliveryInStock = false,
        public bool $deliveryOutStock = false,
        public bool $onSale = false,
        public bool $onlineOnly = false,
        public bool $ecotax = false,
        public bool $minimalQuantity = false,
        public bool $lowStockThreshold = false,
        public bool $lowStockAlert = false,
        public bool $price = false,
        public bool $wholesalePrice = false,
        public bool $unity = false,
        public bool $unitPriceRatio = false,
        public bool $additionalShippingCost = false,
        public bool $customizable = false,
        public bool $textFields = false,
        public bool $uploadableFiles = false,
        public bool $active = false,
        public bool $redirectType = false,
        public bool $idTypeRedirected = false,
        public bool $availableForOrder = false,
        public bool $availableDate = false,
        public bool $showCondition = false,
        public bool $condition = false,
        public bool $showPrice = false,
        public bool $indexed = false,
        public bool $visibility = false,
        public bool $advancedStockManagement = false,
        public bool $dateAdd = false,
        public bool $dateUpd = false,
        public bool $packStockType = false,
        public bool $metaDescription = false,
        public bool $metaKeywords = false,
        public bool $metaTitle = false,
        public bool $linkRewrite = false,
        public bool $name = false,
        public bool $description = false,
        public bool $descriptionShort = false,
        public bool $availableNow = false,
        public bool $availableLater = false
    ) {
    }
}