<?php
require_once 'Abstract1.php';
class Segitiga extends Bentuk2D {
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang()
    {
        return "<br>Segitiga";
    }

    public function luasBidang()
    {
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }

    public function kelilingBidang()
    {
        $keliling = 16 * $this->alas;
        return $keliling;
    }
}
?>