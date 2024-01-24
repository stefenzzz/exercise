<?php

class SmartPhone
{
    private string $camera = '13mp';

 
    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name,$value)
    {
        return $this->$name = $value;
    }
}

$smartphone = new Smartphone();

echo $smartphone->camera = '20mp';