<?php

class Charmeleon extends Pokemon {

	public function __construct($name)
	{
	    parent::__construct($this->name = $name, $this->type = 'Fire', $this->maxHealth = 60, $this->currentHealth = 60, $this->attacks = array('Headbutt  10 DMG', 'Flare  30 DMG'), 
	 	$this->weakness = 'Water X2', $this->resistance = 'Electric  -10 DMG');
	}
}