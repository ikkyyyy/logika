<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh PHP dengan CSS</title>

    <style>
        @keyframes kelap-kelip {
            0% {
                background-color: #ef1493; /* Warna latar awal */
            }
            50% {
                background-color: #bf00ff; /* Warna latar tengah */
            }
            100% {
                background-color: #ffd700; /* Warna latar akhir */
            }
            70% {
               background-color: #00FF00;
            }
        }

        body {
            animation: kelap-kelip 0.5s infinite; /* Waktu dan pengulangan animasi */
        }
    </style>
</head>
<body>

<?php
$barang = [
    [
        'nama' => 'Ban',
        'diskon' => 10,
    ],
    [
        'nama' => 'Oli mesin',
    ],
    [
        'nama' => 'Kampas rem',
    ],
    [
        'nama' => 'Busi',
        'diskon' => 9,
    ],
    [
        'nama' => 'Akumulator',
        'diskon' => 7,
    ],
];

// Menampilkan data barang yang memiliki informasi diskon
foreach ($barang as $item) {
    if (isset($item['diskon'])) {
        echo 'Nama: ' . $item['nama'] . ', Diskon: ' . $item['diskon'] . PHP_EOL;
    }
}
?>

</body>
</html>
