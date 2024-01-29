<?php
function ubahformatTime($waktu){
    $jamMenit = explode ('.',$waktu);
    $jam = $jamMenit [0];
    $menit = isset($jamMenit[1]) ? $jamMenit[1] : '00';

    $format12jam = ($jam < 12) ? 'AM' : 'PM';
    $jam12 = ($jam % 12 == 0) ? 12 : $jam % 12;

    $waktu12jam = sprintf("%02d:%s %s", $jam12, $menit, $format12jam);

    return $waktu12jam;
} 

$waktu1 = '11.00';
$waktu2 = '12.45';
$waktu3 = '21.55';

$hasil1 = ubahformatTime($waktu1);
$hasil2 = ubahformatTime($waktu2);
$hasil3 = ubahformatTime($waktu3);

echo "waktu awal: $waktu1, waktu diubah $hasil1\n </br>";
echo "waktu awal: $waktu2, waktu diubah $hasil2\n </br>";
echo "waktu awal: $waktu3, waktu diubah $hasil3\n </br>";

?>