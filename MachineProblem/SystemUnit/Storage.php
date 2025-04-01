<?php
require_once 'SystemComponents.php';

class Storage extends SystemComponents
{
    private $availableSpace;
    protected static $status = 'Performing read and write operations';
    public function __construct(string $type, int $capacity, float $speed = 0, int $availableSpace)
    {
        #The speed is implemented by default but not used.
        parent::__construct(type: $type, capacity: $capacity, speed: $speed);
        $this->availableSpace = $availableSpace;
    }

    public function getDetails(): string
    {
        $availableSpace = $this->availableSpace;
        $type = parent::type();
        $capacity = parent::capacity();

        return "Drive Type: {$type}\n Capacity: {$capacity}TB\n Available Space: {$availableSpace}gb";
    }

    public function getStatus(): string
    {
        return 'Staus: ' . static::status();
    }
}
