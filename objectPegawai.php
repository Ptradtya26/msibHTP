<?php
require 'Pegawai.php';

$pegawai1 = new Pegawai('1021021','Putra','Manager','Islam','Menikah');
$pegawai2 = new Pegawai('2021022','Aditya','Asisten Manager','Islam','Menikah');
$pegawai3 = new Pegawai('3021023','Dodi','Staff','Islam','Menikah');
$pegawai4 = new Pegawai('4021024','Didi','Kepala Bagian','Islam','Belum');
$pegawai5 = new Pegawai('5021025','Adudu','Staff','Islam','Menikah');

$ar_pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5];

foreach ($ar_pegawai as $pegawai) {
    $pegawai->cetak();
}

?>