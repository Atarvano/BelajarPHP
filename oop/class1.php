<?php


class product
{
    public
    $nama,
    $pembuat,
    $harga;

    public function __construct($nama, $pembuat, $harga)
    {
        $this->nama = $nama;
        $this->pembuat = $pembuat;
        $this->harga = $harga;
    }

    public function getlabel()
    {
        $str = "$this->nama,  $this->harga, $this->harga";
        return $str;
    }
}

class komik extends product
{
    public
    $jmlhalaman;

    public function __construct($nama, $pembuat, $harga, $jmlhalaman)
    {
        parent::__construct($nama, $pembuat, $harga);
        $this->jmlhalaman = $jmlhalaman;

    }

    public function getlabel()
    {
        $komik = parent::getlabel() . " $this->jmlhalaman";
        return $komik;

    }
}

$komik = new komik('one piece', 'oda', 10000, 10);

echo $komik->getlabel();