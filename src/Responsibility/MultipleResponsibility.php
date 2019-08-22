<?php

namespace Falabella\Responsibility;

use Falabella\Responsibility\Multiple\MultipleOfThree;
use Falabella\Responsibility\Multiple\MultipleOfThreeFive;
use Falabella\Responsibility\Multiple\MultipleOfFive;

/**
 * Class MultipleResponsibility
 * @package Falabella\Responsibility
 */
class MultipleResponsibility
{
    
    /**
     * @param $number
     * @return mixed|string
     */
    public function client($number)
    {
        $multipleOfThreeFive = new MultipleOfThreeFive();
        $multipleOfFive = new MultipleOfFive();
        $multipleOfThree = new MultipleOfThree();
        
        $multipleOfThreeFive->successor($multipleOfFive);
        $multipleOfFive->successor($multipleOfThree);
        
        return $multipleOfThreeFive->handler($number);
    }
}