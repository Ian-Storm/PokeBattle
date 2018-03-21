<?php

class Pokemon {
	public $name;
	public $type;
	public $maxHealth;
	public $attacks;
	public $weakness;
	public $resistance;

	 public function __construct($name, $type, $maxHealth, $attacks, 
	 	$weakness, $resistance)
	 {
	 	$this->name = $name;
        $this->type = $type;
        $this->maxHealth = $maxHealth;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
	 }

	 public function __toString() {
        return json_encode($this);
    }

    function attack($attack, $other){

    }

    function calculation(){

    }	
}