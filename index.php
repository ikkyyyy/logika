<?php
$students = [
    [
        "name" => "Rizky",
        "Nis" => "12209270",
        "major" => "pplg",
        "email" => "muhamadrizky0418@gmail.com",
        "status" => "pelajar",
        "image" => "path/to/ikiwfoto.dimsumJPEG.enc"
    ],
    [
        "name" => "agnia",
        "Nis" => "12209466",
        "major" => "pplg",
        "email" => "agniaHafsah0418@gmail.com",
        "status" => "pelajar",
        "image" => "path/to/petir.jpeg"
        
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Gambar dari Array</title>
</head>
<body>
<?php
    // Path ke gambar
    $gambarPath = "path/ke/gambar.jpg";
    ?>

    <img src="<?php echo $gambarPath; ?>" alt="Deskripsi Gambar">
</body>
    <center>
        <table border="5" cellpadding="50">
            <tr>
                <td>Nama</td>
                <td>Nis</td>
                <td>Jurusan</td>
                <td>Email</td>
                <td>Status</td>
                <td>Gambar</td>
            </tr>
            <?php foreach ($students as $student) { ?>
                <tr>
                    <td><?php echo $student["name"] ?></td>
                    <td><?php echo $student["Nis"] ?></td>
                    <td><?php echo $student["major"] ?></td>
                    <td><?php echo $student["email"] ?></td>
                    <td><?php echo $student["status"] ?></td>
                    <td><img src="<?php echo $student["image"] ?>" alt="Foto <?php echo $student["name"] ?>"></td>
                    
                </tr>
            <?php } ?>
        </table>
    </center>
</body>
</html>
