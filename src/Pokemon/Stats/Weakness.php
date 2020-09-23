<?php

namespace Src\Pokemon\Stats;

class Weakness {

	private $energyType = '';
	private $multiplier = 0;

	/**
     * Construct a weakness.
     *
     * @param  const  $energyType
     * @param  int  $multiplier
     */
	public function __construct($energyType, $multiplier)
    {
        $this->energyType = $energyType;
        $this->multiplier = $multiplier;
    }

    /**
     * Returns energy type
     */
    public function getEnergyType() {
        return $this->energyType;
    }

    /**
     * Returns multiplier
     */
    public function getMultiplier() {
        return $this->multiplier;
    }
}