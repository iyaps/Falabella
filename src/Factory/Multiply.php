<?php

namespace Falabella\Factory;

use Falabella\Exception\MultipleException;

/**
 * Class Multiply
 * @package Falabella\Factory
 */
class Multiply implements Multiplicable
{
    
    /**
     * @param $divisor
     * @param $dividend
     * @return int
     * @throws MultipleException
     */
    public function isMultiple($divisor, $dividend) : int
    {
        if ($divisor % $dividend !== 0) {
            throw new MultipleException();
        }
        return $divisor;
    }
}