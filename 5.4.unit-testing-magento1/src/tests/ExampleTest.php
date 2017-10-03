<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function setUp()
    {
        \Mage::getSingleton('core/resource')->getConnection('core_write')->beginTransaction();
    }

    public function testOnePlusOne()
    {
        $this->assertEquals(2, 1+1);
    }

    public function tearDown()
    {
        \Mage::getSingleton('core/resource')->getConnection('core_write')->rollBack();
    }
}