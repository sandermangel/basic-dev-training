<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Sander\Module\Service\Fee;

class FeeTest extends TestCase
{
    public function testCalculatedFee()
    {
        $fee = new Fee();

        $this->assertEquals(2, $fee->calculatedAmount(10));
    }

    public function testZeroPriceFee()
    {
        $fee = new Fee();

        $this->assertEquals(1.5, $fee->calculatedAmount(0));
    }
}