<?php
require 'Gempa.php';
$g1 = new Gempa('Hirosima',0.1);
$g2 = new Gempa('California',2);
$g3 = new Gempa('Tokyo',4);
$g4 = new Gempa('Hirosima',6);
$g5 = new Gempa('Israel',7);

$ar_data = [$g1,$g2,$g3,$g4,$g5];

foreach ($ar_data as $d) {
    $d->cetak();
}

?>