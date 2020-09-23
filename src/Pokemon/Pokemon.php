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
     * @param  const  $energyType
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
     * Reduce given damage from this pokemon's health
     * 
     * @param  int  $damage
     */
    public function takeDamage($damage)
    {
        $this->health -= $damage;
        if($this->health <= 0) {
            self::$population--;
        }
    }

    /**
     * Return calculated damage
     * 
     * @param  object  $energyType
     * @param  object  $attack
     */
    public function getDamage($energyType, $attack)
    {
        $damage = $attack->getDamage();

        if($this->weakness->getEnergyType() == $energyType) {
            $damage = $damage * $this->weakness->getMultiplier();
        }

        if($this->resistance->getEnergyType() == $energyType) {
            $damage -= $this->resistance->getValue();
        }

        return $damage;
    }

    /**
     * Returns a name
     */
    public function getName()
    {
        return $this->name;
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
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Print the amount of pokemon that are alive
     */
    public static function getPopulation()
    {
        return self::$population;
    }
}