<?php

class Staticoop
{
    public static $merk = "Toyota"; // Static property

    public static function getMerk()
    { // Static method
        return "Toyota";
    }
}

// Example usage
echo Staticoop::$merk;
echo Staticoop::getMerk(); // Output: Toyota
?>