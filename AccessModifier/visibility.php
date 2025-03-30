<?php

spl_autoload_register(function ($className) {
    include "{$className}.php";
});

#BaseClass
$baseClassObj = new BaseClass();
echo $baseClassObj -> getPrivate() . PHP_EOL;

#Subclass 
$protectedPropertyObject = new SubClass();
// echo $protectedPropertyObject -> getParentProtectedProperty();
echo $protectedPropertyObject->getParentMethodProperty();
