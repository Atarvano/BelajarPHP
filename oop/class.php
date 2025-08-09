<?php

class Product
{
    public
    $brand,
    $harga,
    $pembuat;


    public function __construct($brand, $harga, $pembuat)
    {
        $this->brand = $brand;
        $this->harga = $harga;
        $this->pembuat = $pembuat;

    }

    public function getlabel()
    {
        $str = "$this->brand,  $this->harga";
        return $str;
    }

}

class Gucci extends Product
{
    public function __construct($brand = 'gucci' $harga, $pembuat)
    {
        $this->brand = $brand;
        $this->harga = $harga;
        $this->pembuat = $pembuat;

    }
}

$Product = new Gucci('gucci', 10000, 'jerman');

echo $Product->getlabel()
    ?>