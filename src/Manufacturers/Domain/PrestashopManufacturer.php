<?php

namespace prestashop\prestashopWebserviceLib\Manufacturers\Domain;

use JMS\Serializer\Annotation;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;
use prestashop\prestashopWebserviceLib\Shared\Domain\Item\PrestashopAbstract;

/**
 * @XmlRoot("prestashop")
 * @XmlNamespace(uri="http://www.w3.org/1999/xlink", prefix="xlink")
 */
class PrestashopManufacturer extends PrestashopAbstract
{
    /**
     * @param array<Manufacturer> $manufacturers
     */
    public function __construct(
        /**
         * @var array<Manufacturer>
         * @XmlList(inline = false, entry = "manufacturer")
         * @Annotation\Type("array<prestashop\prestashopWebserviceLib\Manufacturers\Domain\Manufacturer>")
         * @Annotation\SerializedName("manufacturers")
         */
        public array $manufacturers
    ) {
    }
}
