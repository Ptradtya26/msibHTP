
<?php
//contoh fungsi void(fungsi yang tidak mengembalikan nilai)    
function salam(){
        echo 'Selamat Pagi Putra <br>';
    }
    salam();

    function sayHello($nama,$umur){
        echo"Hallo $nama, dan umur $umur tahun <br>";
    }

    sayHello("Putra",23);
    sayHello("Dinda",21);
    sayHello("Rohee",20);

    //FUNGSI MENGEMBALIKAN NILAI ATAU FUNGSI RETURN
    function tambah($a,$b){
        $c= $a + $b;
        return $c;
    }
    $x = 10;
    $y = 20;
    echo 'hasil 50 + 30 ='.tambah (50,30);
    echo '<br>hasil 60 + 40 ='.tambah (60,40);
    echo "<br> Hasil dari $x + $y =" .tambah($x,$y);

    //RUMUS CEK BILANGAN PRIMA
    function prima($bilangan){
        $prima = true;
        for($i=2; $i<$bilangan; $i++){
            if($bilangan % $i == 0){
                $prima = false;
                break;
            }
        }
        return $prima;
    }
    if(prima(7)){
        echo "<br>bilangan prima";
    }else {
        echo "<br>bukan bilangan prima";
    }
?>