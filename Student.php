<?php

#use declare to force the type of data is correct responding
declare(strict_types=1);

class Student
{
    public $studentName;
    public $section;
    #use type hinting to specify the type of the variable
    public function __construct(array $studentName, int $section) //inside the param they have an 2 arguments that specifying the type of data  
    {
        $this -> studentName = $studentName;
        $this -> section = $section;
    }
}


$studentMyObject = new Student(studentName: ['Carl','Raven','Brent'], section: 18); //passed 2 arguments that contain array and int

var_dump($studentMyObject); //check logs if correct output 