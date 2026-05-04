<?php

namespace prestashop\prestashopWebserviceLib\Carts\Domain;

use JMS\Serializer\Annotation;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;
use prestashop\prestashopWebserviceLib\Shared\Domain\Item\PrestashopAbstract;

/**
 * @XmlRoot("prestashop")
 * @XmlNamespace(uri="http://www.w3.org/1999/xlink", prefix="xlink")
 */
class PrestashopCart extends PrestashopAbstract
{
    /**
     * @param array<Cart> $carts
     */
    public function __construct(
        /**
         * @var array<Cart>
         * @XmlList(inline = false, entry = "cart")
         * @Annotation\Type("array<prestashop\prestashopWebserviceLib\Carts\Domain\Cart>")
         * @Annotation\SerializedName("carts")
         */
        public array $carts
    ) {
    }
}
