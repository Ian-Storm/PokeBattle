<?php

require 'Pokemon.php';
require 'Type.php';
require 'Attack.php';
require 'Weakness.php';
require 'Resistance.php';
require 'Pikachu.php';
require 'Charmeleon.php';

$Pikachu = new Pikachu('Pikachu');
$Charmeleon = new Charmeleon('Charmeleon');

echo "<pre>";
print_r($Pikachu);
print_r($Charmeleon);

echo 'Pikachu: ' . $Pikachu->health . ' health' . '<br>';
echo $Charmeleon->health . '<br>';
echo $Pikachu->attack($Pikachu->attacks[1], $Charmeleon);
echo $Charmeleon->health . '<br>';