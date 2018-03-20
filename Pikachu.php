<?php

class Pikachu extends Pokemon {

	public function __construct($name)
	{
	    parent::__construct($this->name = $name, $this->type = 'Electric', $this->maxHealth = '60', $this->currentHealth = '60', $this->attacks = array('Pika Punch', 'Electric Ring'), 
	 	$this->weakness = 'Fire', $this->resistance = 'Fighting');
	}
}