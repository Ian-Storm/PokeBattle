<?php

class Pokemon {
	public $name;
	public $type;
	public $maxHealth;
	public $currentHealth;
	public $attacks;
	public $weakness;
	public $resistance;

	 public function __construct($name, $type, $maxHealth, $currentHealth, $attacks, 
	 	$weakness, $resistance)
	 {
	 	$this->name = $name;
        $this->type = $type;
        $this->maxHealth = $maxHealth;
        $this->currentHealth = $currentHealth;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
	 }

	 public function __toString() {
        return json_encode($this);
    }	
}