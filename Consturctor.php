<?php

class Uniform
{

    public $price;
    public $name;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function displayInfo() {
        return "This {$this -> name} are price start at {$this -> price} PHP";
    }
}

$uniformObject = new Uniform(name: "STI UNIFORM", price: 100);

echo $uniformObject -> displayInfo();