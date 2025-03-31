<?php

class Animal {
    protected static $sound = "Generic animal sound";

    public static function describe() {
        return "This is a " . static::class . " making a sound: " . static::$sound;
    }
}

class Dog extends Animal {
    protected static $sound = "Woof woof";
}

class Cat extends Animal {
    protected static $sound = "Meow meow";
}

echo Dog::describe() . PHP_EOL; // Outputs: This is a Dog making a sound: Woof woof
echo Cat::describe(); // Outputs: This is a Cat making a sound: Meow meow
