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

$charmeleon->printHealth();
$charmeleon->takeDamage($pikachu, $pikachu->getAttack(0));
$charmeleon->printHealth();

print('<br>');

$pikachu->printHealth();
$pikachu->takeDamage($charmeleon, $charmeleon->getAttack(1));
$pikachu->printHealth();

print('<br>');

Pokemon::printPopulation();