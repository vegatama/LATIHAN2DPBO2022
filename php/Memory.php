<?php

include "Hardware.php";

class Memory extends Hardware{
	// atribut private
    private $frequency;
    private $memorySize;
    private $supportsCuda;

	// constructor
	public function __construct($frequency = "", $memorySize = "", $supportsCuda = ""){
        $this->frequency = $frequency;
        $this->memorySize = $memorySize;
        $this->supportsCuda = $supportsCuda;
	}

	// setter/getter
    public function setfrequency($frequency){
		$this->frequency = $frequency;
	}
    public function getfrequency(){
		return $this->frequency;
	}

    public function setmemorySize($memorySize){
		$this->memorySize = $memorySize;
	}
    public function getmemorySize(){
		return $this->memorySize;
	}

    public function setsupportsCuda($supportsCuda){
		$this->supportsCuda = $supportsCuda;
	}
    public function getsupportsCuda(){
		return $this->supportsCuda;
	}
}

?>