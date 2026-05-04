<?php

namespace prestashop\prestashopWebserviceLib\Categories\Domain;

use JMS\Serializer\Annotation;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;
use prestashop\prestashopWebserviceLib\Shared\Domain\Item\PrestashopAbstract;

/**
 * @XmlRoot("prestashop")
 * @XmlNamespace(uri="http://www.w3.org/1999/xlink", prefix="xlink")
 */
class PrestashopCategory extends PrestashopAbstract
{
    /**
     * @param array<Category> $categories
     */
    public function __construct(
        /**
         * @var array<Category>
         * @XmlList(inline = false, entry = "category")
         * @Annotation\Type("array<prestashop\prestashopWebserviceLib\Categories\Domain\Category>")
         * @Annotation\SerializedName("categories")
         */
        public array $categories
    ) {
    }
}
