<?php

class Pikachu extends Pokemon {
	public $type;
	public $health;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name)
	{
	  $this->name = $name;
	  $this->type = new Type('Electric');
	  $this->health = 60;
	  $this->attacks = array(new attack('Pika Punch', 20), new attack('Electric Ring', 50));
	  $this->weakness = new Weakness('Fire', 1.5);
	  $this->resistance = new Resistance('Fighting', 20);
	}
}