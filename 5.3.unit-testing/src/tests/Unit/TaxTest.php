<?php

namespace Tests\Functional;

use PHPUnit\Framework\TestCase;

use Sander\Module\Service\ProductPrice;

class ProductPriceTest extends TestCase
{
    public function testFinalPricesPerCountry()
    {
        $productPriceService = new ProductPrice();

        $this->assertEquals(14.52, $productPriceService->retailPrice(10, 'nl'));
        $this->assertEquals(14.28, $productPriceService->retailPrice(10, 'de'));
        $this->assertEquals(14.76, $productPriceService->retailPrice(10, 'be'));
    }
}