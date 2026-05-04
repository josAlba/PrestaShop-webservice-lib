<?php

namespace prestashop\prestashopWebserviceLib\SpecificPrices\Domain;

use JMS\Serializer\Annotation;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;
use prestashop\prestashopWebserviceLib\Shared\Domain\Item\PrestashopAbstract;

/**
 * @XmlRoot("prestashop")
 * @XmlNamespace(uri="http://www.w3.org/1999/xlink", prefix="xlink")
 */
class PrestashopSpecificPrice extends PrestashopAbstract
{
    /**
     * @param array<SpecificPrice> $specificPrices
     */
    public function __construct(
        /**
         * @var array<SpecificPrice>
         * @XmlList(inline = false, entry = "specific_price")
         * @Annotation\Type("array<prestashop\prestashopWebserviceLib\SpecificPrices\Domain\SpecificPrice>")
         * @Annotation\SerializedName("specific_prices")
         */
        public array $specificPrices
    ) {
    }
}