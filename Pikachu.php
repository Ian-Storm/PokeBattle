<?php

class Pikachu extends Pokemon {

	public function __construct($name)
	{
	  $type = new Type('Electric');
	  $attacks = array(new attack('Pika Punch', 20), new attack('Electric Ring', 50));
	  $weakness = new Weakness('Fire', 1.5);
	  $resistance = new Resistance('Fighting', 20);

	  parent::__construct($name, $type, 60, $attacks,  $weakness, $resistance);
	}
}