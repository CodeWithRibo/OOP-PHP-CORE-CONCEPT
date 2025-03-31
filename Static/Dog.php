<?php

class Dog extends Animal 
{
    protected static $sounds = 'aw aw aw aw aw';

    public static function bark()
    {
        // Override the method from Animal
        $dog = parent::getDog();

        return "The dog named {$dog} is making sounds like:" . static::sounds();
    }
}
