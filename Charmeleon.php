<?php

class Charmeleon extends Pokemon {
	public $type = 'Fire';
	public $maxHealth = 60;
	public $currentHealth = 60;
	public $attacks = array(array('Headbutt', '10 DMG'),array('Flare', '30 DMG'));
	public $weakness = 'Water X2';
	public $resistance = 'Electric -10 DMG';

	public function __construct($name)
	{
	    parent::__construct($name, $this->type, $this->maxHealth, $this->currentHealth, $this->attacks, $this->weakness, $this->resistance);
	}
}