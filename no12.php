<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animasi Gambar</title>
    <style>
        /* Tambahkan gaya CSS untuk gambar jika diperlukan */
        #animatedImage {
            width: 200px;
            height: 200px;
            position: relative;
            animation: moveLeft 5s linear infinite; /* animasi bergerak ke kiri selama 5 detik, ulang secara tak terbatas */
        }

        @keyframes moveLeft {
            0% {
                left: 100%; /* mulai dari kanan */
            }
            100% {
                left: -200px; /* berakhir di luar layar sebelah kiri */
            }
        }
    </style>
</head>
<body>

    <?php
    // Jika Anda ingin memuat gambar secara dinamis, ganti path gambar sesuai kebutuhan
    $imagePath = "path-to-your-.civic.jpg";
    ?>

    <img id="animatedImage" src=civic.jpg echo $imagePath; ?>" 

</body>
</html>

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
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;
        echo "$i x $j = $hasil <br>";
        if ($j != 10) {
            echo ", ";
        }
    }
    echo "<br>";
}
?>

</body>
</html>