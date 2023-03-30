<?php
require 'Bank.php';
//ciptakan object

$n1 = new Bank('011022321','Putra','30000000');
$n2 = new Bank('011022322','Dinda','30000000');
$n3 = new Bank('011022323','Denji','30000000');
$n4 = new Bank('011022324','Aditya','30000000');
$n5 = new Bank('011022325','Makima','30000000');

//fungsi setor (bertambah) dan ambil (berkurang) uang atau saldo
$n1->ambil(2000000);
$n2->setor(3000000);
$n3->setor(1000000);
$n4->ambil(4000000);
$n5->setor(1010000);
//pemanggilan/cetak data manual
$n1->cetak();
$n2->cetak();
$n3->cetak();
$n4->cetak();
$n5->cetak();

//jumlah Nasabah
echo'<br>Jumlah Nasabah '.Bank::$jml.' Orang';

//pemanggilan/cetak data menggunakan array

//$dataNasabah = array($n1,$n2,$n3,$n4,$n5);
//foreach ($dataNasabah as $data){
    //$data->cetak();
//}
?>