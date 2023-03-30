<?php
require 'Pegawai.php';

$pegawai1 = new Pegawai('2021023','Putra','Manager','Islam','Menikah');
$pegawai2 = new Pegawai('2021023','Aditya','Asisten Manager','Islam','Menikah');
$pegawai3 = new Pegawai('2021023','Dodi','Staff','Islam','Menikah');
$pegawai4 = new Pegawai('2021023','Didi','Kepala Bagian','Islam','Belum');
$pegawai5 = new Pegawai('2021023','Adudu','Staff','Islam','Menikah');

$ar_pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5];

foreach ($ar_pegawai as $pegawai) {
    $pegawai->cetak();
}

?>