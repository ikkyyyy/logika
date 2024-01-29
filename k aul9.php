<?php

function hitungIMT($beratBadan, $tinggiBadan) {
    $tinggiMeters = $tinggiBadan / 100; // Mengonversi tinggi badan ke meter
    $imt = $beratBadan / ($tinggiMeters * $tinggiMeters);
    return $imt;
}

$beratBadanBeni = 44; 
$tinggiBadanBeni = 148;

$imtBeni = hitungIMT($beratBadanBeni, $tinggiBadanBeni);

if ($imtBeni < 18.5) {
    $kategori = "Kurus";
} elseif ($imtBeni >= 18.5 && $imtBeni < 22.9) {
    $kategori = "Normal";
} elseif ($imtBeni >= 22.9 && $imtBeni < 24.9) {
    $kategori = "Berat Badan Lebih";
} else {
    $kategori = "Obesitas";
}

echo "Berat Badan: $beratBadanBeni kg, Tinggi Badan: $tinggiBadanBeni cm\n";
echo "IMT Beni: $imtBeni\n";
echo "Kategori IMT Beni: $kategori\n";
?>
