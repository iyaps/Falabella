<?php

namespace Falabella\Responsibility\Multiple;

use Falabella\Exception\MultipleException;
use Falabella\Factory\Multiply;
use Falabella\Responsibility\Handler;

/**
 * Class MultipleOf3
 * @package Falabella\Responsibility\Multiple
 */
class MultipleOfThree implements Handler
{

    const DIVISOR = 3;
    const TEXT = 'Linio';
    
    private $successor;
    
    /**
     * @param $number
     * @return string
     */
    public function handler($number)
    {
        try {
            $multiply = new Multiply();
            $multiply->isMultiple($number, self::DIVISOR);
            return self::TEXT;
        } catch (MultipleException $multipleException) {
            unset($multipleException);
            return $number;
        }
    }
    
    /**
     * @param Handler $successor
     */
    public function successor(Handler $successor) : void
    {
        $this->successor = $successor;
    }
}
