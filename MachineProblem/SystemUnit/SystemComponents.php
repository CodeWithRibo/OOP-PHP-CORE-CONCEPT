<?php
#Parent Class with implementing Abstract
abstract class SystemComponents
{
    #implement abstract for hiding unnecessary details
    abstract public function getStatus(): string; 
    abstract public function getDetails(): string; 

    #added object property that inherit to subclass
    protected $type;
    protected $capacity;
    protected $speed;
    protected static $status = 'Still processing';

    #set a value property from a parameter
    public function __construct(string $type, int $capacity, float $speed)
    {
        $this -> type = $type;
        $this -> capacity = $capacity;
        $this -> speed = $speed;
    }

    #retrieve the the value using access controll
    public static function status(): string
    {
        return static::$status;
    }

    public function type():string
    {
        return $this->type;
    }

    public function capacity():int 
    {
        return $this->capacity;
    }

    public function speed():float
    {
        return $this->speed;
    }
}