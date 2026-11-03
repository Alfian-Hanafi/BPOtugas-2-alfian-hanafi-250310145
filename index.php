<?php
 
class BangunDatar
{
    public $phi;
 
    public function __construct()
    {
        $this->phi = 3.14;
    }
 
    public function persegi($sisi)
    {
        $luas = $sisi * $sisi;
        echo "Persegi: sisi = $sisi, luas = $luas <br>";
    }
 
    public function persegiPanjang($panjang, $lebar)
    {
        $luas = $panjang * $lebar;
        echo "Persegi Panjang: panjang = $panjang, lebar = $lebar, luas = $luas <br>";
    }
 
    public function segitiga($alas, $tinggi)
    {
        $luas = 0.5 * $alas * $tinggi;
        echo "Segitiga: alas = $alas, tinggi = $tinggi, luas = $luas <br>";
    }
 
    public function lingkaran($r)
    {
        $luas = $this->phi * $r * $r;
        echo "Lingkaran: phi = $this->phi, r = $r, luas = $luas <br>";
    }
 
    public function trapesium($a, $b, $tinggi)
    {
        $luas = 0.5 * ($a + $b) * $tinggi;
        echo "Trapesium: a = $a, b = $b, tinggi = $tinggi, luas = $luas <br>";
    }
}
 
$bangun = new BangunDatar();
$bangun->persegi(5);
$bangun->persegiPanjang(8, 4);
$bangun->segitiga(10, 6);
$bangun->lingkaran(7);
$bangun->trapesium(5, 9, 4);