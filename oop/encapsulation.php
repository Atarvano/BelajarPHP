<?php

// belajar konsep OOP Encapsulation
class Mobil
{
    private $merk;
    private $harga;
    private $pembuat;
    protected $tahun;

    public function __construct($merk, $harga, $pembuat, $tahun)
    {
        $this->merk = $merk;
        $this->harga = $harga;
        $this->pembuat = $pembuat;
        $this->tahun = $tahun;
    }
    public function getLabel()
    {
        return "$this->merk, $this->harga, $this->pembuat, $this->tahun";
    }

}

class BMW extends Mobil
{
    public function __construct($merk, $harga, $pembuat, $tahun)
    {
        parent::__construct($merk, $harga, $pembuat, $tahun);
    }
    public function Nos()
    {
        return "Mobil ini memiliki fitur NOS";
    }
    public function getMerk()
    {
        return $this->merk;
    }
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }
}

$mobil = new BMW('BMW', 500000, 'Jerman', 2023);
echo $mobil->getLabel() . "<br>";
echo $mobil->Nos() . "<br>";
echo $mobil->getMerk() . "<br>";
?>