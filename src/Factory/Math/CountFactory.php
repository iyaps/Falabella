<?php

namespace Falabella\Factory\Math;

use Falabella\Factory\Count;
use Falabella\Factory\Length;
use Falabella\Factory\Number;

/**
 * Class CountFactory
 * @package Falabella\Factory\Math
 */
class CountFactory
{
    /**
     * @param Length $length
     * @return Number
     */
    public static function build(Length $length) : Number
    {
        $count = new Count();
        return $count->count($length);
    }
}