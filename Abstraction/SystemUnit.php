<?php
#Real-world-scenarios of System Unit that hide the unnecessary detaiils
abstract class SystemUnit
{
    #implement abstract method without body
    abstract public function Type(): string;

    protected $name;
    protected $generation;

    public function __construct($name, $generation)
    {
        $this->name = $name;
        $this->generation = $generation;
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getGeneration(): string
    {
        return $this->generation;
    }
}

class Cpu extends SystemUnit
{
    public function Type(): string
    {
        return parent::getName() . ' ' . parent::getGeneration();
    }
}

$obj = new Cpu(name: 'Intel', generation: 'Core I7');
echo $obj->Type();
