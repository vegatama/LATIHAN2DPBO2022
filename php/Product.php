<?php

class Product{
	// atribut private
    private $price;
    private $idProduct;

	// constructor
	public function __construct($price = "", $idProduct = ""){
        $this->price = $price;
        $this->idProduct = $idProduct;;
	}

	// setter/getter
    public function setprice($price){
		$this->price = $price;
	}
    public function getprice(){
		return $this->price;
	}

    public function setidProduct($idProduct){
		$this->idProduct = $idProduct;
	}
    public function getidProduct(){
		return $this->idProduct;
	}
}

?>