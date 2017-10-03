<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Sander\Module\Service\ProductPrice;

class ProductPriceTest extends TestCase
{
    public function testPriceIncludingFee()
    {
        $productPrice = new ProductPrice();

        $this->assertEquals(12.00, $productPrice->priceIncludingFee(10));
    }

    public function testPriceIncludingTax()
    {
        $productPrice = new ProductPrice();

        $this->assertEquals(12.10, $productPrice->priceIncludingTax(10, 'nl'));
    }
}