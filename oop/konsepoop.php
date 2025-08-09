<?php


class Mobil
{
    public $merk;
    public $harga;
    public $pembuat;
    public function __construct($merk, $harga, $pembuat)
    {
        $this->merk = $merk;
        $this->harga = $harga;
        $this->pembuat = $pembuat;
    }
    public function getLabel()
    {
        $str = "$this->merk, $this->harga";
        return $str;
    }

}

class BMW extends Mobil
{
    public function __construct($merk = 'BMW', $harga, $pembuat)
    {
        parent::__construct($merk, $harga, $pembuat);
    }

    public function Nos()
    {
        return "Mobil ini memiliki fitur NOS";

    }
}

$mobil = new BMW('BMW', 500000, 'Jerman');
echo $mobil->getLabel() . "<br>";
echo $mobil->Nos();
?>