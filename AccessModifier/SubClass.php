<?php

class SubClass extends BaseClass
{
    public function getParentMethodProperty() 
    {
        return parent::getProtected();
    }

}