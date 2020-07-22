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

$charmeleon->getHealth();
$damage = $pikachu->attack($charmeleon, $pikachu->attacks[0]);
$charmeleon->takeDamage($damage);
$charmeleon->getHealth();

print('<br>');

$pikachu->getHealth();
$damage = $charmeleon->attack($pikachu, $charmeleon->attacks[1]);
$pikachu->takeDamage($damage);
$pikachu->getHealth();

print('<br>');

Pokemon::getPopulation();