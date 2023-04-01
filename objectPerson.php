<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';
require_once 'Staff.php';
$d1 = new Dosen ('Putra','L','123','M.kom');
$d2 = new Dosen ('Aditya','L','321','S.kom');
$m1 = new Mahasiswa ('Sakura','p','3','Teknologi Informasi');
$m2 = new Mahasiswa ('Boboboi','L','3','Teknologi Informasi');
$s = new Staff ('Adudu','L','0211','Staff Waket 3',10000000);

$ar_data = [$d1,$d2, $m1,$m2, $s];

foreach ($ar_data as $data){
    $data->cetak();
}
?>