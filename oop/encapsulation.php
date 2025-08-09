<?php

// belajar konsep OOP Encapsulation
class Mobil
{
    protected $merk;
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
    public function Nos()
    {
        return "Guest";
    }
    public function getMerk()
    {
        return $this->merk;
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
}
class Ferrari extends Mobil
{
    public function __construct($merk, $harga, $pembuat, $tahun)
    {
        parent::__construct($merk, $harga, $pembuat, $tahun);
    }
    public function Nos()
    {
        return "Mobil ini memiliki fitur NOS yang sangat cepat";
    }
}

$mobil = new BMW('BMW', 500000, 'Jerman', 2023);
echo $mobil->getLabel() . "<br>";
echo $mobil->Nos() . "<br>";
echo $mobil->getMerk() . "<br>";

$ferrari = new Ferrari('Ferrari', 1000000, 'Italia', 2023);

echo $ferrari->getLabel() . "<br>";
echo $ferrari->Nos() . "<br>";
echo $ferrari->getMerk() . "<br>";
?>