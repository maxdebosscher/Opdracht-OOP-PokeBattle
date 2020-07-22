<?php

namespace Src\Pokemon\Stats;

class Weakness {

	public $energyType = '';
	public $multiplier = 0;

	/**
     * Construct a weakness.
     *
     * @param  string  $energyType
     * @param  int  $multiplier
     */
	public function __construct($energyType, $multiplier)
    {
        $this->energyType = $energyType;
        $this->multiplier = $multiplier;
    }
}