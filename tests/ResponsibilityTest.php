<?php

namespace Tests;

use Falabella\Responsibility\Multiple\MultipleOfThree;
use Falabella\Responsibility\Multiple\MultipleOfThreeFive;
use Falabella\Responsibility\Multiple\MultipleOfFive;
use PHPUnit\Framework\TestCase;

class ResponsibilityTest extends TestCase
{
    /**
     * Test multiple of 3 by passing 6
     */
    public function testExpectLinioText()
    {
        $multipleResponsibility = new \Falabella\Responsibility\MultipleResponsibility();
        $actual = $multipleResponsibility->client(6);
        $this->assertEquals(MultipleOfThree::TEXT, $actual);
    }
    
    /**
     * Test multiple of 5 by passing 10
     */
    public function testExpectITText()
    {
        $multipleResponsibility = new \Falabella\Responsibility\MultipleResponsibility();
        $actual = $multipleResponsibility->client(10);
        $this->assertEquals(MultipleOfFive::TEXT, $actual);
    }
    
    /**
     * Test multiple of 3 and 5 by passing 15
     */
    public function testExpectLinianosText()
    {
        $multipleResponsibility = new \Falabella\Responsibility\MultipleResponsibility();
        $actual = $multipleResponsibility->client(15);
        $this->assertEquals(MultipleOfThreeFive::TEXT, $actual);
    }
    
    /**
     * Test expectation by passing 1.
     */
    public function testExpectNumber()
    {
        $multipleResponsibility = new \Falabella\Responsibility\MultipleResponsibility();
        $actual = $multipleResponsibility->client(1);
        $this->assertEquals(1, $actual);
    }
}