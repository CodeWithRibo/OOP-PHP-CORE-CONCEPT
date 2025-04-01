<?php

spl_autoload_register(function($class){
    include "{$class}.php";
});

$dogObject = new Dog(dog: 'Ribo',cat: 'Cassandra');
echo $dogObject -> bark() . PHP_EOL;


$catObject = new Cat(dog: 'Ribo',cat: 'Cassandra');
echo $catObject -> meow() . PHP_EOL;


