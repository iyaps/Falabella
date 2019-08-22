<?php

namespace Falabella\Factory;

/**
 * Class Length
 * @package Falabella\Factory
 */
class Length
{

    protected $from;
    protected $until;
    
    /**
     * Length constructor.
     * @param $from
     * @param $until
     */
    public function __construct($from, $until)
    {
        $this->setFrom($from);
        $this->setUntil($until);
    }
    
    /**
     * @return float
     */
    public function getFrom() : float
    {
        return $this->from;
    }
    
    /**
     * @param $from
     * @return Length
     */
    public function setFrom($from) : Length
    {
        $this->from = $from;
        return $this;
    }
    
    /**
     * @return float
     */
    public function getUntil() : float
    {
        return $this->until;
    }
    
    /**
     * @param $until
     * @return Length
     */
    public function setUntil($until) : Length
    {
        $this->until = $until;
        return $this;
    }
}