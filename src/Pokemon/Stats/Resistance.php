<?php

namespace Src\Pokemon\Stats;

class Resistance {

	public $energyType = '';
	public $value = 0;

	/**
     * Construct a resistance.
     *
     * @param  string  $energyType
     * @param  int  $value
     */
	public function __construct($energyType, $value)
    {
        $this->energyType = $energyType;
        $this->value = $value;
    }
}