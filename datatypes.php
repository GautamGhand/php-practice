<?php

class a
{

    public static $number=20;

    static function get()
    {
        $number=30;
       return a::$number;
    }
}
print a::get();


 ?>