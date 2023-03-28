<?php 
$m1 = ['NIM'=>'20021023', 'nama'=>'Putra', 'Nilai'=>90];
$m2 = ['NIM'=>'20021024', 'nama'=>'Einstein', 'Nilai'=>90];
$m3 = ['NIM'=>'20021025', 'nama'=>'Dinda', 'Nilai'=>92];
$m4 = ['NIM'=>'20021026', 'nama'=>'Joko', 'Nilai'=>40];
$m5 = ['NIM'=>'20021027', 'nama'=>'Adi', 'Nilai'=>70];
$m6 = ['NIM'=>'20021028', 'nama'=>'Widodo', 'Nilai'=>75];
$m7 = ['NIM'=>'20021029', 'nama'=>'Bila', 'Nilai'=>20];
$m8 = ['NIM'=>'20021030', 'nama'=>'Bibi', 'Nilai'=>85];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8];
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat']

/* Tugas 
1. Buat grade 
2. Buat Keterangan jumlah mahasiswa, nilai tertinggi, nilai terendah, rata rata Masukan kedalam tfoot
3. Buat predikat dari nilai menggunakan switch case
*/
?>
<h1><marquee>Tugas PHP</marquee></h1>
<table width="100%" height="80" border="2" bordercolor="Black" bgcolor="bluered">
<thead>
    
    <tr>
    <?php 
    foreach($ar_judul as $judul){
        ?>
        <th><?= $judul ?></th>
        <?php }?>
    </tr>

</thead>
<tbody> 
<?php
$no = 1;
$total_nilai = 0;
$nilai_tertinggi = $mahasiswa[0]["Nilai"];
$nilai_terendah = $mahasiswa[0]["Nilai"];
foreach($mahasiswa as $mhs){
$ket = ($mhs['Nilai']>= 60) ? 'Lulus' : 'Tidak lulus';
//GRADE 
if ($mhs['Nilai'] >= 85 && $mhs['Nilai'] <= 100) $grade = 'A';
else if ($mhs['Nilai']>= 75 && $mhs['Nilai'] < 84) $grade = 'B';
else if ($mhs['Nilai']>= 65 && $mhs['Nilai'] < 74) $grade = 'C';
else if ($mhs['Nilai']>= 35 && $mhs['Nilai'] < 60) $grade = 'D';
else if ($mhs['Nilai']>= 0 && $mhs['Nilai'] < 30) $grade = 'E';
else $grade = '';

//PREDIKAT
    switch ($grade){
        case "A" :
            $predikat = "Sangat Baik";
            break;

      case "B" :
           $predikat = "Baik";
            break;
            
    
      case "C" :
          $predikat = "Cukup";
            break;
          
    case "D" :
    $predikat = "Kurang";
         break;

        case "E" :
       $predikat = "Sangat Kurang";
            break;
    default:
    $predikat = "";
       break;
            
        }
    
    ?>
    <tr>
        <td><?= $no ?> </td>
        <td><?= $mhs['NIM']?></td>
        <td><?= $mhs['nama']?></td>
        <td><?= $mhs['Nilai']?></td>
        <td><?= $ket ?></td>
        <td><?= $grade ?></td>
        <td><?= $predikat ?></td>
</tr>
<?php $no++; } ?>
</tbody>
<tfoot bgcolor="grey">
    <tr>
        <td colspan="4">Jumlah mahsasiswa</td>
        <td><?=count($mahasiswa)?></td>
        <td colspan="4"></td>
    </tr>
    
<tr bgcolor="green">
        <td colspan="4">Nilai tertinggi:</td>
        <td><?= max(array_column($mahasiswa, 'Nilai')) ?></td>
        <td colspan="4"></td>
    </tr>
    <tr bgcolor="red">
        <td colspan="4">Nilai terendah:</td>
        <td><?= min(array_column($mahasiswa, 'Nilai')) ?></td>
        <td colspan="4"></td>
</tr>
    <tr>
        <td colspan="4">Rata-rata:</td>
        <td><?= array_sum(array_column($mahasiswa, 'Nilai'))/count($mahasiswa) ?></td>
        <td colspan="4"></td>
    </tr>
</tfoot>