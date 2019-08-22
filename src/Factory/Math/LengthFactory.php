<?php

namespace Falabella\Factory\Math;

use Falabella\Factory\Length;

/**
 * Class LengthFactory
 * @package Falabella\Factory\Math
 */
class LengthFactory
{
    /**
     * @param $from
     * @param $until
     * @return Length
     */
    public static function build($from, $until) : Length
    {
        return new Length($from, $until);
    }
}