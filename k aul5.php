<?php
$totalHarga = 154000;

$diskonPersen = 7;

if ($totalHarga >= 100000 && $totalHarga < 200000) {
    $diskonPersen = 7;
} elseif ($totalHarga >= 200000) {
    $diskonPersen = 10;
}

$besaranDiskon = ($totalHarga * $diskonPersen) / 100;

$hargaYangHarusDibayar = $totalHarga - $besaranDiskon;

echo "Total harga belanja: Rp " . number_format($totalHarga, 0, ',', '.') . "<br>";
echo "Diskon " . $diskonPersen . "%: Rp " . number_format($besaranDiskon, 0, ',', '.') . "<br>";
echo "Harga yang harus dibayar: Rp " . number_format($hargaYangHarusDibayar, 0, ',', '.');
?>
