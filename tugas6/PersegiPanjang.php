<?php
require_once 'Abstract1.php';
class PersegiPanjang extends Bentuk2D {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang()
    {
        return "<br>Persegi Panjang";
    }

    public function luasBidang()
    {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }

    public function kelilingBidang()
    {
        $keliling = 5 * ($this->panjang + $this->lebar);
        return $keliling;
    }
}
?>