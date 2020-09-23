<?php

include_once 'autoload.php';

use Src\Pokemon\Pokemon;
use Src\Pokemon\Pikachu;
use Src\Pokemon\Charmeleon;

// Construct pokemon
$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

// Perform actions
print('<h1>OOP PokeBattle</h1>');

print('<pre>Charmeleon hp: ' . $charmeleon->getHealth() . '</pre>');
$charmeleon->takeDamage($pikachu->getEnergyType(), $pikachu->getAttack(0));
print('<pre>Charmeleon hp: ' . $charmeleon->getHealth() . '</pre>');

print('<br>');

print('<pre>Pikachu hp: ' . $pikachu->getHealth() . '</pre>');
$pikachu->takeDamage($charmeleon->getEnergyType(), $charmeleon->getAttack(1));
print('<pre>Pikachu hp: ' . $pikachu->getHealth() . '</pre>');

print('<br>');

print('<pre>Pokemon alive:' . Pokemon::getPopulation() . '</pre>');