<?php
/**
 * https://devdocs.prestashop-project.org/1.7/webservice/resources/stock_availables/
 */

namespace prestashop\prestashopWebserviceLib\StockAvaliables\Domain;

use JMS\Serializer\Annotation;
use prestashop\prestashopWebserviceLib\Shared\Domain\Item\PrestashopItemAbstract;

class StockAvailable extends PrestashopItemAbstract
{
    public function __construct(
        /**
         * @Annotation\Type("string")
         * @Annotation\SerializedName("id")
         */
        public ?string $id = null,
        /**
         * @Annotation\Type("string")
         * @Annotation\SerializedName("id_product")
         */
        public ?string $idProduct = null,
        /**
         * @Annotation\Type("string")
         * @Annotation\SerializedName("id_product_attribute")
         */
        public ?string $idProductAttribute = null,
        /**
         * @Annotation\Type("string")
         * @Annotation\SerializedName("id_shop")
         */
        public ?string $idShop = null,
        /**
         * @Annotation\Type("string")
         * @Annotation\SerializedName("id_shop_group")
         */
        public ?string $idShopGroup = null,
        /**
         * @Annotation\Type("string")
         * @Annotation\SerializedName("quantity")
         */
        public ?string $quantity = null,
        /**
         * @Annotation\Type("string")
         * @Annotation\SerializedName("depends_on_stock")
         */
        public ?string $dependsOnStock = null,
        /**
         * @Annotation\Type("string")
         * @Annotation\SerializedName("out_of_stock")
         */
        public ?string $outOfStock = null,
        /**
         * @Annotation\Type("string")
         * @Annotation\SerializedName("location")
         */
        public ?string $location = null
    ) {
    }
}