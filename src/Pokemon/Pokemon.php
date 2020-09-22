<?php

namespace Src\Pokemon;

abstract class Pokemon {

	private $name = '';
	private $energyType = '';
	private $hitpoints = 0;
    private $attacks;                // [{'name', damage}]
	private $weakness;               // {'energyType', multiplier}
    private $resistance;             // {'energyType', value}
    
    private static $population = 0;
	
    /**
     * Construct a pokemon
     *
     * @param  string  $name
     * @param  string  $energyType
     * @param  int  $hitpoints
     * @param  array  $attacks
     * @param  object  $weakness
     * @param  object  $resistance
     */
	protected function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        self::$population++;
    }

    /**
     * Calculate attack damage and reduce it from this pokemon's health
     * 
     * @param  object  $enemy
     * @param  object  $attack
     */
    public function takeDamage($enemy, $attack)
    {
        $damage = $attack->getDamage();

        if($this->weakness->getEnergyType() == $enemy->getEnergyType()) {
            $damage = $damage * $this->weakness->getMultiplier();
        }

        if($this->resistance->getEnergyType() == $enemy->getEnergyType()) {
            $damage -= $this->resistance->getValue();
        }

        print('<pre>' . $this->name . ' took ' . $damage . ' damage from ' . $enemy->name . '.</pre>');

        $this->health -= $damage;
        if($this->health <= 0) {
            self::$population--;
        }
    }

    /**
     * Returns an attack
     * @param int $key
     */
    public function getAttack($key)
    {
        $attack = $this->attacks[$key];
        return $attack;
    }

    /**
     * Returns energy type
     */
    public function getEnergyType()
    {
        return $this->energyType;
    }

    /**
     * Print health
     */
    public function printHealth()
    {
        print('<pre>' . $this->name . ' HP: ' . $this->health . '.</pre>');
    }

    /**
     * Print the amount of pokemon that are alive
     */
    public static function printPopulation()
    {
        print('<pre>There are ' . self::$population . ' pokemon alive.</pre>');
    }
}