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
echo 'Charmeleon: ' . $Charmeleon->health . ' health' . '<br>';
echo 'Pikachu used ' . $Pikachu->attacks[1]->attack . '<br>';
	 $Pikachu->attack($Pikachu->attacks[1], $Charmeleon);
echo 'Charmeleon: ' . $Charmeleon->health . ' health left' . '<br>';
	 $Charmeleon->attack($Charmeleon->attacks[1], $Pikachu);
echo 'Charmeleon used ' . $Charmeleon->attacks[1]->attack . '<br>';
echo 'Pikachu: ' . $Pikachu->health . ' health left' . '<br>';