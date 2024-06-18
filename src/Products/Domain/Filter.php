<?php

namespace prestashop\prestashopWebserviceLib\Products\Domain;

use prestashop\prestashopWebserviceLib\Shared\Domain\FilterAbstract;

class Filter extends FilterAbstract
{
    public function __construct(
        public ?string $id = null,
        public ?string $idManufacturer = null,
        public ?string $idSupplier = null,
        public ?string $idCategoryDefault = null,
        public ?string $new = null,
        public ?string $cacheDefaultAttribute = null,
        public ?string $idDefaultImage = null,
        public ?string $idDefaultCombination = null,
        public ?string $idTaxRulesGroup = null,
        public ?string $positionInCategory = null,
        public ?string $manufacturerName = null,
        public ?string $quantity = null,
        public ?string $type = null,
        public ?string $idShopDefault = null,
        public ?string $reference = null,
        public ?string $supplierReference = null,
        public ?string $location = null,
        public ?string $width = null,
        public ?string $height = null,
        public ?string $depth = null,
        public ?string $weight = null,
        public ?string $quantityDiscount = null,
        public ?string $ean13 = null,
        public ?string $isbn = null,
        public ?string $upc = null,
        public ?string $cacheIsPack = null,
        public ?string $cacheHasAttachments = null,
        public ?string $isVirtual = null,
        public ?string $state = null,
        public ?string $additionalDeliveryTimes = null,
        public ?string $deliveryInStock = null,
        public ?string $deliveryOutStock = null,
        public ?string $onSale = null,
        public ?string $onlineOnly = null,
        public ?string $ecoTax = null,
        public ?string $minimalQuantity = null,
        public ?string $lowStockThreshold = null,
        public ?string $lowStockAlert = null,
        public ?string $price = null,
        public ?string $wholesalePrice = null,
        public ?string $unity = null,
        public ?string $unitPriceRatio = null,
        public ?string $additionalShippingCost = null,
        public ?string $customizable = null,
        public ?string $textFields = null,
        public ?string $uploadableFiles = null,
        public ?string $active = null,
        public ?string $redirectType = null,
        public ?string $idTypeRedirected = null,
        public ?string $availableForOrder = null,
        public ?string $availableDate = null,
        public ?string $showCondition = null,
        public ?string $condition = null,
        public ?string $showPrice = null,
        public ?string $indexed = null,
        public ?string $visibility = null,
        public ?string $advancedStockManagement = null,
        public ?string $dateAdd = null,
        public ?string $dateUpd = null,
        public ?string $packStockType = null,
        public ?string $metaDescription = null,
        public ?string $metaKeywords = null,
        public ?string $metaTitle = null,
        public ?string $linkRewrite = null,
        public ?string $name = null,
        public ?string $description = null,
        public ?string $descriptionShort = null,
        public ?string $availableNow = null,
        public ?string $availableLater = null
    ) {
    }
}