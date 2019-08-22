<?php

namespace Falabella\Responsibility\Multiple;

use Falabella\Exception\MultipleException;
use Falabella\Factory\Multiply;
use Falabella\Responsibility\Handler;

/**
 * Class MultipleOfThreeFive
 * @package Falabella\Responsibility\Multiple
 */
class MultipleOfThreeFive implements Handler
{

    const DIVISOR = [3 ,5];
    const TEXT = 'Linianos';
    
    private $successor;
    
    /**
     * @param $number
     * @return string
     */
    public function handler($number)
    {
        try {
            $multiply = new Multiply();
            foreach (self::DIVISOR as $divisor) {
                $multiply->isMultiple($number, $divisor);
            }
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
