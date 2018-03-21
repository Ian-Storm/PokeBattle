<?php

class Pikachu extends Pokemon {
	public $type = 'Electric';
	public $maxHealth = 60;
	public $currentHealth = 60;
	public $attacks = array(array('Pika Punch', '20 DMG'),array('Electric Ring', '50 DMG'));
	public $weakness = 'Fire X1.5';
	public $resistance = 'Fighting -20 DMG';

	public function __construct($name)
	{
	    parent::__construct($name, $this->type, $this->maxHealth, $this->currentHealth, $this->attacks, $this->weakness, $this->resistance);
	}
}