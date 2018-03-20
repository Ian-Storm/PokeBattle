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

print_r('<pre>' . $Pikachu . '</pre>');
print_r('<pre>' . $Charmeleon . '</pre>');