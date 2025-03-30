<?php 

spl_autoload_register(function($className){
    include "{$className}.php";
});

#BaseClass
$privatePropertyObject = new BaseClass();
echo $privatePropertyObject -> getPrivateProperty() . PHP_EOL;


#Subclass 
$protectedPropertyObject = new SubClass();
echo $protectedPropertyObject -> getParentProtectedProperty();