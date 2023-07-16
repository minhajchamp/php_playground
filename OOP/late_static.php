<?php

class Phone
{
    protected static $number = 123;
    
    public function getNumber()
    {
        // return self::$number;
        return static::$number;
    }
}

class Fax extends Phone
{
    protected static $number = 234;
}

// It still returns 123 even we have over riden $number in Fax class, why?
// becasue we have returned this number as self if we do it static then we will have 234
echo (new Fax)->getNumber();
