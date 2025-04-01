<?php
require_once 'SystemComponents.php';
class Gpu extends SystemComponents
{
    private $model;
    protected static $status = 'Rendering graphics for active applications';

    public function __construct(string $type, int $capacity, float $speed, string $model)
    {
        parent::__construct(type: $type, capacity: $capacity, speed: $speed);
        $this->model = $model;
    }

    public function getDetails(): string
    {
        $model = $this->model;
        $type = parent::type();
        $capacity = parent::capacity();
        $speed = parent::speed();

        return "Model: {$model}\n Type: {$type}\n Capacity: {$capacity}Gb\n Speed: {$speed}Mhz";
    }

    public function getStatus(): string
    {
        return 'Status: ' . static::status();
    }
}
