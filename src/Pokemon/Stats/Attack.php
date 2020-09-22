<?php

namespace Src\Pokemon\Stats;

class Attack {

	private $name = '';
	private $damage = 0;

	/**
     * Construct an attack.
     *
     * @param  string  $name
     * @param  int  $damage
     */
	public function __construct($name, $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
    }

    /**
     * Returns damage
     */
    public function getDamage() {
        return $this->damage;
    }

}