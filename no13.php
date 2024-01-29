<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flying Bird Animation</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="bird-container">
    <img class="bird" src="burungElang.jpg" alt="Burung">
  </div>
  <script src="script.js"></script>
</body>

    <title>Animated Flowing Water</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="water-container">
    <div class="water"></div>
  </div>
  <script src="script.js"></script>
</body>
</html>
    <title>Animasi Air Terjun</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }
        img {
            width: 35%;
            height: auto;
            position: absolute;
            top: 0;
            animation: waterfallAnimation 3.5s linear infinite;
            right: 50px;
        }
        @keyframes waterfallAnimation {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-50%);
            }
        }
    </style>
</head>
<body>
    <?php
    $jumlah_gambar = 5; // Sesuaikan dengan jumlah gambar air terjun yang Anda miliki

    for ($i = 1; $i <= $jumlah_gambar; $i++) {
        echo "<img src='airterjun2.jpg' style='animation-delay: " . ($i - 1) . "s'>";
    }
    ?>
</body>
</html>


<?php

$students = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

$totalNilaiPerOrang = [];

foreach ($students as $student) {
    $nama = $student['nama'];
    $nilai = $student['nilai'];

    $totalNilai = array_sum($nilai);

    $totalNilaiPerOrang[$nama] = $totalNilai;
}

foreach ($totalNilaiPerOrang as $nama => $totalNilai) {
    echo "Total nilai untuk $nama: $totalNilai\n<br>";
}
