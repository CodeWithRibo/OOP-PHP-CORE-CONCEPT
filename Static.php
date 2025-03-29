<?php

class ExampleStatic
{
    public static $firstName = "Ribo"; //Declare static for property
    public $lastName = "Luna"; //non-static

    public static function displayFirstName()  //static  method
    {
        return self::$firstName;
    }

    public function displayLastName() //non-static method
    {
        return $this->lastName;
    }


}

#declared static keyword to access via Class Name (ExampleStatic)
echo ExampleStatic::displayFirstName();


#non-static accessing using instance (object) 
$exampleStaticObj = new ExampleStatic();

echo $exampleStaticObj->displayLastName();
