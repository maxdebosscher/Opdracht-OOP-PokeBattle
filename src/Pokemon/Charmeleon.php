<?php

namespace Src\Pokemon;

use Src\Pokemon\Pokemon;
use Src\Pokemon\Stats\Attack;
use Src\Pokemon\Stats\EnergyType;
use Src\Pokemon\Stats\Resistance;
use Src\Pokemon\Stats\Weakness;

final class Charmeleon extends Pokemon {

    /**
     * Construct a pokemon.
     *
     * @param  string  $name
     */
	public function __construct($name)
    {
        $attacks = [new Attack('Head Butt', 10), new Attack('Flare', 30)];
        $weakness = new Weakness(EnergyType::WATER, 2);
        $resistance = new Resistance(EnergyType::LIGHTNING, 10);

        parent::__construct(
            $name,
            EnergyType::FIRE,
            60,
            $attacks,
            $weakness,
            $resistance
        );
    }

}
