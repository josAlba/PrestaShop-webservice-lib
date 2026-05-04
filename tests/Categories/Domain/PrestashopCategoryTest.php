<?php

namespace prestashop\prestashopWebserviceLib\Tests\Categories\Domain;

use PHPUnit\Framework\TestCase;
use prestashop\prestashopWebserviceLib\Categories\Domain\PrestashopCategory;
use prestashop\prestashopWebserviceLib\Categories\Domain\Category;

class PrestashopCategoryTest extends TestCase
{
    public function testSerializeXML(): void
    {
        $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
    <categories>
        <category>
            <id><![CDATA[10]]></id>
            <active><![CDATA[1]]></active>
        </category>
    </categories>
</prestashop>
XML;

        $categoryObject = new PrestashopCategory(
            [
                new Category(id: '10', active: '1'),
            ]
        );

        $categoryXml = PrestashopCategory::byXml($xml);

        self::assertNotEmpty($categoryXml->categories);
        self::assertEquals($categoryXml->categories[0]->id, $categoryObject->categories[0]->id);
        self::assertEquals($categoryXml->categories[0]->active, $categoryObject->categories[0]->active);
    }
}
