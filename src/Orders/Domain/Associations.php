<?php

namespace prestashop\prestashopWebserviceLib\Orders\Domain;

use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation;
use prestashop\prestashopWebserviceLib\Shared\Domain\Item\PrestashopItemAbstract;

final class Associations extends PrestashopItemAbstract
{
    public function __construct(
        /**
         * @var array<OrdersRow>
         * @XmlList(inline = false, entry = "order_row")
         * @Annotation\Type("array<prestashop\prestashopWebserviceLib\Orders\Domain\OrdersRow>")
         * @Annotation\SerializedName("order_rows")
         */
        public array $orderRows = [],
    ) {
    }
}