<?php

namespace Falabella\Responsibility\Multiple;

use Falabella\Exception\MultipleException;
use Falabella\Factory\Multiply;
use Falabella\Responsibility\Handler;

/**
 * Class MultipleOfFive
 * @package Falabella\Responsibility\Multiple
 */
class MultipleOfFive implements Handler
{
    const DIVISOR = 5;
    const TEXT = 'IT';

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
            return $this->successor->handler($number);
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