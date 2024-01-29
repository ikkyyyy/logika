<?php
//soal logika no 2.
//usia andi saat ini adalah 16 tahun, sedangkan usia Beni 3 tahun lebih tua
 //di bandingkan Dani yang tahun kelahirannya sama dengan andi, lalu usia eko 
 //adalah 1 lustrum (5 tahun), sebelum usia beni.antara andi daan eko siapakah yang lahir 
 //ditahun kabisat (4 taahun sekali). tampilkan tahun kelahiran tiap tiap orang
$usiaAndi = 16;
$usiaBeni = $usiaAndi + 3;
$usiaDani = $usiaAndi;
$usiaEko = $usiaBeni - 5;

$tahunSekarang = date("Y");
$tahunLahirAndi = $tahunSekarang - $usiaAndi;
$tahunLahirBeni = $tahunSekarang - $usiaBeni;
$tahunLahirDani = $tahunSekarang - $usiaDani;
$tahunLahirEko = $tahunSekarang - $usiaEko;

echo "Tahun kelahiran Andi: " . $tahunLahirAndi . "\n";

echo "Tahun kelahiran Beni: " . $tahunLahirBeni . "\n";

echo "Tahun kelahiran Dani: " . $tahunLahirDani . "\n";

echo "Tahun kelahiran Eko: " . $tahunLahirEko . "\n";


 ?>