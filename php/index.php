<?php

include "Memory.php";

// instansiasi objek
$objek = new Memory();
$objek->setprice("$100");
$objek->setidProduct("994959");
$objek->setbrand("Kingston");
$objek->setmodel("Hyperx");
$objek->setfrequency("3200Mhz");
$objek->setmemorySize("16GB");
$objek->setsupportsCuda("yes");

// output
echo "price : " .$objek->getprice() ."<br>";
echo "idProduct : " .$objek->getidProduct() ."<br>";
echo "brand : " .$objek->getbrand() ."<br>";
echo "model : " .$objek->getmodel() ."<br>";
echo "frequency : " .$objek->getfrequency() ."<br>";
echo "memorySize : " .$objek->getmemorySize() ."<br>";
echo "supportsCuda : " .$objek->getsupportsCuda() ."<br>";

?>