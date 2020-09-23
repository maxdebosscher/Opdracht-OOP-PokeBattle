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
$damage = $charmeleon->getDamage($pikachu->getEnergyType(), $pikachu->getAttack(0));
$charmeleon->takeDamage($damage);
print('<pre>' . $charmeleon->getName() . ' took ' . $damage . ' damage from ' . $pikachu->getName() . '.</pre>');
print('<pre>Charmeleon hp: ' . $charmeleon->getHealth() . '</pre>');

print('<br>');

print('<pre>Pikachu hp: ' . $pikachu->getHealth() . '</pre>');
$damage = $charmeleon->getDamage($charmeleon->getEnergyType(), $charmeleon->getAttack(1));
$pikachu->takeDamage($damage);
print('<pre>' . $pikachu->getName() . ' took ' . $damage . ' damage from ' . $charmeleon->getName() . '.</pre>');
print('<pre>Pikachu hp: ' . $pikachu->getHealth() . '</pre>');

print('<br>');

print('<pre>Pokemon alive:' . Pokemon::getPopulation() . '</pre>');