<?php

$usiaAndi = 25; 
$nilaiMatematika = 84;
$nilaiBahasaIndonesia = 84;
$nilaiBahasaInggris = 84    ;


$usiaMin = 16;
$usiaMax = 25;
$nilaiMatematikaMin = 87;
$nilaiBahasaIndonesiaMin = 87;
$nilaiBahasaInggrisMin = 85;
$rataRataMin = 85;

if ($usiaAndi >= $usiaMin && $usiaAndi <= $usiaMax) {
    
    if ($nilaiMatematika >= $nilaiMatematikaMin && $nilaiBahasaIndonesia >= $nilaiBahasaIndonesiaMin && $nilaiBahasaInggris >= $nilaiBahasaInggrisMin) {
       
        $rataRata = ($nilaiMatematika + $nilaiBahasaIndonesia + $nilaiBahasaInggris) / 3;

        if ($rataRata >= $rataRataMin) {
            echo "Andi diterima di ikatan dinas.";
        } else {
            echo "Andi ditolak karena rata-rata nilai tidak memenuhi syarat.";
        }
    } else {
        echo "Andi ditolak karena nilai mata pelajaran tidak memenuhi syarat.";
    }
} else {
    echo "Andi ditolak karena usia tidak memenuhi syarat.";
}

?>
