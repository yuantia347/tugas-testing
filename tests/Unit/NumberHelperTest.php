<?php

namespace Tests\Unit;

use App\Helpers\NumberHelper;
use PHPUnit\Framework\TestCase;

class NumberHelperTest extends TestCase
{
    public function testIsInteger()
    {
        $this->assertTrue(NumberHelper::isInteger(5));
        $this->assertTrue(NumberHelper::isInteger("10"));
        $this->assertFalse(NumberHelper::isInteger(5.5));
        $this->assertFalse(NumberHelper::isInteger("abc"));
    }

    public function testIsEven()
    {
        $this->assertTrue(NumberHelper::isEven(6));
        $this->assertFalse(NumberHelper::isEven(7));
        $this->assertFalse(NumberHelper::isEven(4.5)); 
        $this->assertFalse(NumberHelper::isEven("abc")); 
    }

    public function testIsOdd()
    {
        $this->assertTrue(NumberHelper::isOdd(7));
        $this->assertFalse(NumberHelper::isOdd(6));
        $this->assertFalse(NumberHelper::isOdd(4.5)); 
        $this->assertFalse(NumberHelper::isOdd("abc")); 
    }
}
