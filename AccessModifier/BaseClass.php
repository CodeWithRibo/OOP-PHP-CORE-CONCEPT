<?php

class BaseClass //Parent Class
{
    #Visibility property (Access Modifier)
    public $publicProperty = 'Public: The property and method accesible to all classes, parent class, child class then outside the class';
    protected $protectedProperty = 'The property and method only accessable within declared class (parent class) and subclass';
    private $privateProperty = 'The property and method only access wihtin the class';

    protected function getProtected()
    {
        return $this->protectedProperty;
    }

    private function setPrivate()
    {
        return "The property and method only access wihtin the class"; 
    }

    public function getPrivate()
    {
        return self::setPrivate();
    } 
}
