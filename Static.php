<?php

class ExampleStatic
{
    public static $name = "Ribo"; //Declare static for property

    public static function displayName()  //static for method
    {
        return self::$name;
    }
}

#declared static keyword to access via Class Name (ExampleStatic)
echo ExampleStatic::displayName();
