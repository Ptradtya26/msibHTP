<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Rumus Bangung datar Persegi</title>
</head>
<body>
    <h1> Bangun Datar Persegi </h1>

    <form method="POST">
        <table width="424" height="80" border="2" bordercolor="blue">
        <tr>
        <td height="40" colspan="4" align="center" bgcolor="red">
            <div>
              <h2>
                <u><i>Luas Jajar Genjang</i></u>
              </h2>
            </div>
          </td>
        </tr>

        <tr>
            <td>Alas</td>
            <td>
                <input type="text" name="Alas" require>
            </td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td>
                <input type="text" name="tinggi" require>
            </td>
        </tr>
        <tr>
            <td height="40" colspan="4" align="center">
                <input type="submit" name="submit" value="Hitung">
        </td>
        </tr>
</table>
</form>
<?php 
    if(isset($_POST['submit'])){
        $nilaiA = $_POST['Alas'];
        $nilaiB = $_POST['tinggi'];

        $luasjajargenjang = $nilaiA * $nilaiB ;
        echo 'Hasil perhitungan Luas Jajar Genjang';
        echo '<br> Diketahui :';
        echo '<br> Alas : '.$nilaiA;
        echo '<br> Tinggi : '.$nilaiB;

        echo '<br> Maka Luasnya ' .$luasjajargenjang;
    }
?>
</body>
</html>