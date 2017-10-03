<?php

namespace Tests\Functional;

use PHPUnit\Framework\TestCase;
use Sander\Module\Service\Tax;

class TaxTest extends TestCase
{
    public function testTaxRatePerCountry()
    {
        $tax = new Tax();

        $this->assertEquals(21, $tax->rateByCountry('nl'));
        $this->assertEquals(19, $tax->rateByCountry('de'));
        $this->assertEquals(23, $tax->rateByCountry('be'));
    }

    public function testZeroTaxOnUndefined()
    {
        $tax = new Tax();

        $this->assertEquals(0, $tax->rateByCountry('unkown'));
    }

    public function testTaxAmountPerCountry()
    {
        $tax = new Tax();

        $this->assertEquals(2.1, $tax->taxAmount(10,'nl'));
        $this->assertEquals(1.9, $tax->taxAmount(10,'de'));
        $this->assertEquals(2.3, $tax->taxAmount(10,'be'));
    }
}