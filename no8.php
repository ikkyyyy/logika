<?php
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$kelompok_kompeten = [];
$kelompok_belum_kompeten = [];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kelompok_kompeten[] = $nilai;
    } else {
        $kelompok_belum_kompeten[] = $nilai;
    }
}

echo "Kelompok Kompeten: " . implode(", ", $kelompok_kompeten) . "\n <br>";
echo "Kelompok Belum Kompeten: " . implode(", ", $kelompok_belum_kompeten) . "\n <br>";
?>