<?php 
echo 'Dokumen PHP saya ada di' .$_SERVER['DOCUMENT_ROOT'];
echo '<br>Nama FIle' .$_SERVER['SCRIPT_FILENAME'];
echo 'hello word';
//ini pemanggilan PHP

//belajar Variable
$namaSiswa = "Putra";
$umur = 23;
$berat_Badan = 73;
$jenis_Kelamin = "Laki-laki";
$tes = "coba";
echo '<hr>';
echo 'Nama Siswa :' .$namaSiswa; 
echo'<br> umur :' .$umur;
echo'<br> Berat Badan :' .$berat_Badan;
echo'<br> Jenis Kelamin :' .$jenis_Kelamin;
?>
<!--Ini adalah pemanggilan dengan menggunakan document HTML-->
<hr>
Nama Siswa : <?= $namaSiswa?>
<br> Umur : <?= $umur?>
<br> Berat Badan : <?=$berat_Badan?>
<br> Jenis Kelamin : <?= $jenis_Kelamin?>