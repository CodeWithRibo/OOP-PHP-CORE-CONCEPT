<?php

spl_autoload_register(function($className){
    include "{$className}.php";
});

#CPU
$cpuObj = new Cpu(type: 'Coffee Lake Architecture', capacity: 9, speed: 2.8, cores: 8, threads: 8, processor: 'Intel i5-8400', IntegratedGPU: 'UHD Graphics 630');
echo 'CENTRAL PROCESSING UNIT' . PHP_EOL;
echo $cpuObj->getDetails() . PHP_EOL;
echo $cpuObj->getStatus() . PHP_EOL;

#RAM
$ramObj = new Ram(type: 'DDR4',capacity: 8,speed: 2666,formFactor: 'DIMM',manuFacturer: 'Kingston');
echo 'RANDOM ACCESS MEMORY' . PHP_EOL;
echo $ramObj -> getDetails().PHP_EOL;
echo $ramObj -> getStatus().PHP_EOL;

#GPU
$gpuObj = new Gpu(type:'Dedicated Graphics Card',capacity: 6,speed: 1000,model: 'GTX 1650');
echo 'GRAPHICS CARD' . PHP_EOL;
echo $gpuObj -> getDetails() . PHP_EOL;
echo $gpuObj -> getStatus() . PHP_EOL;

#STORAGE
$storageObj = new Storage(type:'SSD', capacity: 1, availableSpace: 600, speed: 0);
echo 'STORAGE' . PHP_EOL;
echo $storageObj -> getDetails(). PHP_EOL;
echo $storageObj -> getStatus(). PHP_EOL;

#POWER SUPPLY 
$powerSupplyObj = new PowerSupply(capacity: 500, usage: 300, type: '', speed: 0);
echo 'POWER SUPPLY' . PHP_EOL;
echo $powerSupplyObj -> getDetails(). PHP_EOL;
echo $powerSupplyObj -> getStatus(). PHP_EOL;