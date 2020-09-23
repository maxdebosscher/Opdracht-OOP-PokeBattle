<?php

namespace Src\Pokemon\Stats;

class Resistance {

	private $energyType = '';
	private $value = 0;

	/**
     * Construct a resistance.
     *
     * @param  const  $energyType
     * @param  int  $value
     */
	public function __construct($energyType, $value)
    {
        $this->energyType = $energyType;
        $this->value = $value;
    }

    /**
     * Returns energy type
     */
    public function getEnergyType() {
        return $this->energyType;
    }

    /**
     * Returns value
     */
    public function getValue() {
        return $this->value;
    }
}