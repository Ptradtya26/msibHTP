<?php
$ar_prodi =["SI"=>"Sistem Informasi", "TI"=>"Teknologi Informasi","ILKOM"=>"Ilmu Komputer", "TE"=>"Teknik Elektro"];
$ar_skill =["HTML"=>10,"CSS"=>10,"Javascript"=>20,"RWD Bootsrap"=>20,"PHP"=>30, "MySQL"=>30,"Laravel"=>40];
$domisili =["Jakarta","Bandung","Bekasi","Pontianak","Surabaya", "Lainnya"];

function hitung_skill($skill){
    $skor = 0;
    foreach($skill as $skill){
        if(isset($ar_skill[$skill])){
            $skor += $ar_skill[$skill];
        }
    }
    return $skor;
}
function kategori_skill($skor){
    if($skor <= 0) {
        return "Tidak Memadai";
    } else if ($skor <=40) {
        return "Kurang";
    } else if ($skor <=60) {
        return "Cukup";
    } else if ($skor <=40) {
        return "Baik";
    } else {
        return "Sangat Baik";
    }
}
?>
<h1><marquee>SELAMAT MENGISI</marquee></h1>
<fieldset style="background-color:greenyellow;">
    <legend>FROM REGISTRASI KELOMPOK BELAJAR</legend>
    <thead>
            <tr>
                <th>FORM REGISTRASI</th>
            </tr>
        </thead>
        <table width="100%" height="80" border="2" bordercolor="Black" bgcolor="bluered">
        
        <tbody>
            <form method ="POST">
                <tr>
                    <td>NIM :</td>
                    <td>
                        <input type="number" name="nim">
                    </td>
                </tr>
                <tr>
                <td>Nama :</td>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                <td>Email :</td>
                    <td>
                        <input type="email" name="email">
                    </td>
                </tr>
                <tr>
                <td>Jenis Kelamin :</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-Laki">Laki-Laki &nbsp;
                        <input type="radio" name="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                <td>Program Studi :</td>
                    <td>
                        <select name="prodi">
                            <?php

                            foreach($ar_prodi as $prodi => $v){
                                ?>
                                <option value="<?=$prodi?>"><?= $v ?></option>
                            <?php } ?>
                            </select>
                    </td>
                </tr>
                <tr>
                <td>Skill Programming : </td>
                <td> 
                    <?php 
                    foreach ($ar_skill as $skill => $s){
                        ?>
                    <input type="checkbox" name="skill[]" value="<?= $skill ?>" ><?= $skill ?>

                    <?php } ?>
                </td>
            </tr>
                <tr>
                <td>Program Studi :</td>
                    <td>
                        <select name="domisili">
                            <?php
                            foreach($domisili as $d){
                                ?>
                                <option value="<?= $d ?>"><?= $d ?></option>
                            <?php } ?>
                            </select>
                    </td>
                </tr>
                <tfoot>
                    <tr>
                        <th>
                            <th colspan="2">
                            <button name="proses">Submit</button>
                        </th>
                         </tr>
                            </tfoot>
                            </table>

                         </fieldset>
                         <?php

                         if (isset($_POST['proses'])){
                            $nim = $_POST['nim'];
                            $nama = $_POST['nama'];
                            $jk = $_POST['jk'];
                            $prodi = $_POST['prodi'];
                            $skill = $_POST['skill'];
                            $domisili = $_POST['domisili'];
                            $email = $_POST['email'];
                        
                            $total_skill =0;
                            foreach($skill as $s){
                                $total_skill += $ar_skill[$s];
                            }
                            $skor_skill = $total_skill;
                            $kategori_skill = kategori_skill($skor_skill);
                            $email = $_POST['email'];

                        
                        }
                         ?>
                        NIM : <?= $nim ?><br>
                        Nama : <?= $nama ?><br>
                        Jenis Kelamin <?= $jk ?><br>
                        Program Studi : <?= $prodi ?><br>
                        Skill : 
                        <?php 
                        foreach($skill as $s){ ?>
                        <?= $s ?> ,
                        <?php } ?>
                        <br>Domisili : <?= $domisili ?>
                        <br>Email : <?= $email ?>
                        <br>Skor Skill : <?= $skor_skill ?>
                        <br>Kategori Skill : <?= $kategori_skill ?>
                        