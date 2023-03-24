<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  body{
    background-color: greenyellow;
  }
  label {
    margin-top: 20px;
    font-weight: bold;
  }
  button[type="submit"] {
    background-color: white;
  }
  button[type="submit"]:hover {
    background-color: black;
  }  
  h1{ 
    color: red;
    font-weight: bold;
  }
</style>
<body>
    <form method="POST">
        <table>
        
        <h1>Data Gaji Pegawai</h1>
        <hr><label>Nama Pegawai</label>
       <br><input type="text" name="nama" placeholder="Masukkan Nama Anda">
        <hr><label>Jabatan</label>
        <br><select name="jabatan">
        <option value="">- Pilih Jabatan Anda -</option>
            <option value="manager">Manager</option>
            <option value="asisten">Asisten</option>
            <option value="kabag">Kabag</option>
            <option value="staff">Staff</option>
        </select>
        <hr><label>Status</label>
        <input type="radio" name="status" value="sudah_nikah" checked> Sudah Menikah
        <input type="radio" name="status" value="belum_nikah" checked> Belum Menikah
        <hr><label>Jumlah Anak</label>
        <br><input type="number" name="jumlah_anak" placeholder="Masukkan Jumlah Anak"><br>
        <br><button name="proses" type="submit">Proses</button>
</table>
    </form>
    <?php
error_reporting(0);

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$status = $_POST['status'];
$jumlah_anak = $_POST['jumlah_anak'];
$tombol = $_POST['proses'];

$gapok = 0;
$tunj_jabatan = 0;
$tunj_keluarga = 0;
$gaji_kotor = 0;
$zakat_profesi = 0;
$take_home_pay = 0;

//JABATAN DAN GAJI NYA
switch ($jabatan) {
    case "manager":
        $gapok = 20000000;
        break;
    case "asisten":
        $gapok = 15000000;
        break;
    case "kabag":
        $gapok = 10000000;
        break;
    case "staff":
        $gapok = 4000000;
        break;
}
//TUNJANGAN JABATAN 20% dari gaji pokok
$tunj_jabatan = 0.2 * $gapok;

//STATUS SUDAH MENIKAH MEMILIKI MAKSIMAL 2 ANAK = 5% DARI GAJIPOKOK JIKA ANAK 3-5 = 10% DARI GAJIPOKOK
if ($status == "sudah_nikah") {
    if ($jumlah_anak >= 3 && $jumlah_anak <= 5) {
        $tunj_keluarga = 0.1 * $gapok;
    } else if ($jumlah_anak >= 1 && $jumlah_anak <= 2) {
        $tunj_keluarga = 0.05 * $gapok;
    }
}
//GAJI KOTOR GAJIPOKOK + TUNJ. JABATAN + TUNJ. KELUARGA = GAJI KOTOR
$gaji_kotor = $gapok + $tunj_jabatan + $tunj_keluarga;
//ZAKAT PROFESI JIKA IA MUSLIM DAN GAJI KOTOR MINIMAL 6 JUTA MAKA ADA ZAKAT = 2.5% DARI GAJI KOTOR
$zakat_profesi = (isset($tombol) && $gaji_kotor >= 6000000) ? 0.025 * $gaji_kotor : 0;
//TAKE HOME PAY = GAJI KOTOR DIKURANG ZAKAT PROFESI
$take_home_pay = $gaji_kotor - $zakat_profesi;

if (isset($tombol)) {
    ?>
    <hr><table width="424" height="80" border="2" bordercolor="blue">   
    <tr>
          <th >Nama Pegawai</th>
          <td><?=  $nama ?></td>
        </tr>
        
        <tr>
          <th>Jabatan</th>
          <td><?= ucfirst($jabatan) ?></td>
        </tr>
        <tr>
          <th>Status Pernikahan</th>
          <td><?= ucfirst(str_replace('_', '.', $status)) ?></td>
        </tr>
        <tr>
          <th>Jumlah Anak</th>
          <td><?= $jumlah_anak ?></td>
        </tr>
        <tr>
          <th>Gaji Pokok</th>
          <td><?= number_format($gapok, 0, ',', '.') ?></td>
        </tr>
        <tr>
          <th>Tunjangan Jabatan</th>
          <td><?= number_format($tunj_jabatan, 0, ',', '.') ?></td>
        </tr>
        <tr>
          <th>Tunjangan Keluarga</th>
          <td><?= number_format($tunj_keluarga, 0, ',', '.') ?></td>
        </tr>
        <tr>
          <th>Gaji Kotor</th>
          <td><?= number_format($gaji_kotor, 0, ',', '.') ?></td>
        </tr>
        <tr>
          <th>Zakat Profesi</th>
          <td><?= number_format($zakat_profesi, 0, ',', '.') ?></td>
        </tr>
        <tr>
          <th>Take Home Pay</th>
          <td><?=number_format($take_home_pay, 0, ',', '.') ?></td>
        </tr>
        
<?php } ?>
</body>
</html>