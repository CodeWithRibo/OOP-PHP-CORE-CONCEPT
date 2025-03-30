<?php

class Bank 
{
    private string $money; 

    public function setAccessMoney( $value)
    {
            $this -> money = $value;        
    }

    public function getAccessMoney()
    {
        return $this->money;
    }
}

$accessBank = new Bank();
$accessBank -> setAccessMoney(100);
echo $accessBank -> getAccessMoney();

