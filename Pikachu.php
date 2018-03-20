<?php

class Pikachu extends Pokemon {

	public function __construct($name)
	{
	    parent::__construct($this->name = $name, $this->type = 'Electric', $this->maxHealth = 60, $this->currentHealth = 60, $this->attacks = array('Pika Punch  20 DMG', 'Electric Ring  50 DMG'), 
	 	$this->weakness = 'Fire X1,5', $this->resistance = 'Fighting  -20 DMG');
	}
}