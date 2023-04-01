<?php
require_once "Lingkaran.php";
require_once "PersegiPanjang.php";
require_once "segitiga.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table width='424' height='80' border='2' bordercolor='blue' bgcolor='greenyellow'>
    <thead>
        <tr bgcolor='yellow'>
        <th>Nama Bidang</th>
        <th>Luas</th>
        <th>Keliling</th>
        </tr>
    </thead>
    <tbody>
        <?php 
         $lingkaran = new Lingkaran(7);
         $persegiPanjang = new PersegiPanjang(8   , 15);
         $segitiga = new segitiga(4, 9);
         $Bidang = array($lingkaran, $persegiPanjang, $segitiga);
        
         foreach ($Bidang as $Bidang) {
            echo "<tr>";
            echo "<td>" . $Bidang->namaBidang() . "</td>";
            echo "<td>" . $Bidang->luasBidang() . "</td>";
            echo "<td>" . $Bidang->kelilingBidang() . "</td>";
            echo "</tr>";
        }
        
        ?>
    </tbody>
    </table>
</body>
</html>

