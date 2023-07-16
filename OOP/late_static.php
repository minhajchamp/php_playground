<?php

class Phone
{
    protected static $number = 123;
    
    public function getNumber()
    {
        return self::$number;
    }
}

class Fax extends Phone
{
    protected static $number = 234;
}


echo (new Phone)->getNumber();
