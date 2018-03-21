<?php

class Charmeleon extends Pokemon {
	public $type;
	public $health;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name)
	{
	  $this->name = $name;
	  $this->type = new Type('Fire');
	  $this->health = 60;
	  $this->attacks = array(new attack('Headbutt', 10), new attack('Flare', 30));
	  $this->weakness = new Weakness('Water', 2);
	  $this->resistance = new Resistance('Electric', 10);
	}
}