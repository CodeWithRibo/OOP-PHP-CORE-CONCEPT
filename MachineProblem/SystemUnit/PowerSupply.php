<?php

require_once 'SystemComponents.php';

class PowerSupply extends SystemComponents
{
    private $usage;
    protected static $status = 'Supplying power efficiently';
    public function __construct(string $type = '' , int $capacity, float $speed = 0, int $usage)
    {
        #the type and speed is implemented by default but not used in this subclass
        parent::__construct(type: $type, capacity: $capacity, speed: $speed);
        $this->usage = $usage;
    }

    public function getDetails(): string
    {
        $capacity = parent::capacity();
        $usage = $this->usage;

        return "Capacity: {$capacity} watts\n Usage:{$usage} watts";
    }

    public function getStatus(): string
    {
        return 'Status' . static::status();
    }
}
