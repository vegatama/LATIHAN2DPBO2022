<?php

include "Product.php";

class Hardware extends Product{
	// atribut private
    private $brand;
    private $model;

	// constructor
	public function __construct($brand = "", $model = ""){
        $this->brand = $brand;
        $this->model = $model;
	}

	// setter/getter
    public function setbrand($brand){
		$this->brand = $brand;
	}
    public function getbrand(){
		return $this->brand;
	}

    public function setmodel($model){
		$this->model = $model;
	}
    public function getmodel(){
		return $this->model;
	}
}

?>