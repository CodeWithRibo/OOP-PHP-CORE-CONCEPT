<?php

#Gumawa ka ng animal na pwede ipamana ang tunog nya sa mga iba't ibang hayop
#Gumamit ng Inheritance, encapsulation, polymorphism, and static

class Animal
{
    protected static $sounds = "General Animal Sounds";
    protected static $nameDog;
    protected static $nameCat;

    #set the value of properties from the parameter of constructor
    public function __construct(string $dog, string $cat) 
    {
        self::$nameDog = $dog;
        self::$nameCat = $cat;
    }

    #retrieve the value from the properties
    protected static function sounds(): string
    {
        return static::$sounds;
    }

    protected static function getDog(): string
    {
        return self::$nameDog;
    }

    protected static function getCat(): string
    {
        return self::$nameCat;
    }
}
