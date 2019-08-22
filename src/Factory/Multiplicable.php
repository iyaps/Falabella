<?php

namespace Falabella\Factory;

/**
 * Interface Multiplicable
 * @package Falabella\Factory
 */
interface Multiplicable
{
    /**
     * @param $divisor
     * @param $dividend
     * @return int
     */
    public function isMultiple($divisor, $dividend) : int;
}