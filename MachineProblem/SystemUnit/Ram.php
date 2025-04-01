<?php
require_once 'SystemComponents.php';
class Ram extends SystemComponents
{
    private $formFactor;
    private $manuFacturer;
    protected static $status ='Running at ';

    public function __construct(string $type, int $capacity, float $speed, string $formFactor, string $manuFacturer)
    {
        parent::__construct(type: $type, capacity: $capacity, speed: $speed);
        $this->formFactor = $formFactor;
        $this->manuFacturer = $manuFacturer;
    }

    public function getDetails(): string
    {
        $type = parent::type();
        $capacity = parent::capacity() * 2; // two slot used
        $speed = parent::speed();
        $formFactor = $this->formFactor;
        $manuFacturer = $this->manuFacturer;

        return "Total Capacity: {$capacity}gb \n Type:{$type} \n Speed:{$speed}Mhz \n Form Factor: {$formFactor} \n ManuFacturer: {$manuFacturer}  ";
    }

    public function getStatus(): string
    {
        return 'Status: ' . static::status() . parent::speed().'Mhz';
    }
}

