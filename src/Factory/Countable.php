<?php

namespace Falabella\Factory;

/**
 * Interface Countable
 * @package Falabella\Factory
 */
interface Countable
{
    /**
     * @param Length $length
     * @return Number
     */
    public function count(Length $length) :  Number;
}
