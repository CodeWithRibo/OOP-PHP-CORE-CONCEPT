<?php

require_once 'SystemComponents.php';

class Cpu extends SystemComponents
{
    #added status for cpu
    protected static $status = 'Active';

    #added cpu cores
    private $cores;
    private $threads;
    private $processor;
    private $IntegratedGPU;

    #extend the cores property
    public function __construct(string $type, int $capacity, float $speed, int $cores, int $threads, string $processor, string $IntegratedGPU)
    {
        #implement the parent of constructor to the subclass constructor
        parent::__construct(type: $type, capacity: $capacity, speed: $speed);
        $this->cores = $cores;
        $this->threads = $threads;
        $this->processor = $processor;
        $this->IntegratedGPU = $IntegratedGPU;
    }
    #implement abstract from a SystemComponents
    public function getDetails(): string
    {
        $processor = $this->processor;
        $cores = $this->cores;
        $threads = $this->threads;
        $IntegratedGPU = $this->IntegratedGPU;
        $type = parent::type();
        $capacity = parent::capacity();
        $speed = parent::speed();

        return "Processor: {$processor} \nCores: {$cores} \nThreads: {$threads} \nSpeed: {$speed}Ghz \nCapacity: {$capacity}MB \nIntegrated Graphics: {$IntegratedGPU}\nType: {$type}";
    }

    public function getStatus(): string
    {
        return 'Status: ' . static::status();
    }
}

$obj = new Cpu(type: 'Coffee Lake Architecture', capacity: 9, speed: 2.8, cores: 8, threads: 8, processor: 'Intel i5-8400', IntegratedGPU: 'UHD Graphics 630');

echo $obj->getDetails() . PHP_EOL;
echo $obj->getStatus();
