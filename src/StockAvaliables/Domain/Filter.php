<?php
/**
 * https://devdocs.prestashop-project.org/1.7/webservice/resources/stock_availables/
 */

namespace prestashop\prestashopWebserviceLib\StockAvaliables\Domain;

use JMS\Serializer\Annotation;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter as FilterInterface;
use prestashop\prestashopWebserviceLib\Shared\Domain\FilterAbstract;
use prestashop\prestashopWebserviceLib\Shared\Domain\PrestashopItemAbstract;

class Filter extends FilterAbstract
{
    public function __construct(
        public ?string $id = null,
        public ?string $idProduct = null,
        public ?string $idProductAttribute = null,
        public ?string $idShop = null,
        public ?string $idShopGroup = null,
        public ?string $quantity = null,
        public ?string $dependsOnStock = null,
        public ?string $outOfStock = null,
        public ?string $location = null
    ) {
    }
}