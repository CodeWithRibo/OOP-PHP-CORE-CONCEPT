<?php

class Cat extends Animal
{
    protected static $sounds = 'meow meow meow';

    public static function meow()
    {
        //Override the method Cat Animal
        $cat = parent::getCat();
    
        return "The cat named {$cat} is making sounds like:" . static::sounds();
    }
}