<?php

class Uniform
{
    public $name = "STI Uniform";
    public $price;

    public function priceAsCurrency($divisor, $currenySymbols) {
        $priceAsCurrency = $currenySymbols. $this-> price / $divisor ;
        return $priceAsCurrency;
    }
}

$uniformObject = new Uniform();
$uniformObject -> price = 650;
echo $uniformObject -> priceAsCurrency(100, '$');



// $priceAsCurrency = $uniformObject2 -> priceAsCurrency(100);
// var_dump($priceAsCurrency);
