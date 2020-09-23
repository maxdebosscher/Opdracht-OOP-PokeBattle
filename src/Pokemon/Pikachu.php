<?php

namespace Src\Pokemon;

use Src\Pokemon\Pokemon;
use Src\Pokemon\Stats\Attack;
use Src\Pokemon\Stats\EnergyType;
use Src\Pokemon\Stats\Resistance;
use Src\Pokemon\Stats\Weakness;

final class Pikachu extends Pokemon {

    /**
     * Construct a pokemon.
     *
     * @param  string  $name
     */
	public function __construct($name)
    {
        $attacks = [new Attack('Electric Ring', 50), new Attack('Pika Punch', 20)];
        $weakness = new Weakness(EnergyType::FIRE, 1.5);
        $resistance = new Resistance(EnergyType::FIGHTING, 20);

        parent::__construct(
            $name,
            EnergyType::LIGHTNING,
            60,
            $attacks,
            $weakness,
            $resistance
        );
    }
    
}
