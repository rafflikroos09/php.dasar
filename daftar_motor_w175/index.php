<?php 
$motor = [
    [
        "nama" => "W175 SE", 
        "tahun" => "2023", 
        "warna" => "Metalic Resplendent Silver", 
        "harga" => "35.100.000",
        "gambar" => "123.jpg"
    ],
    [
        "nama" => "W175 TR", 
        "tahun" => "2022", 
        "warna" => "Pearl Brillian Yellow", 
        "harga" => "34.300.000",
        "gambar" => "W175TR.png"
    ],
    [
        "nama" => "W175 CAFE", 
        "tahun" => "2024", 
        "warna" => "Metallic Ocean Blue", 
        "harga" => "36.400.000",
        "gambar" => "W175CAFE.png"
    ],
    [
        "nama" => "W800", 
        "tahun" => "202 3", 
        "warna" => "Metallic Slate Blue", 
        "harga" => "311.000.000",
        "gambar" => "W800.png"
    ],
    [
        "nama" => "W800 CAFE", 
        "tahun" => "2022", 
        "warna" => "Metallic Diablo Black", 
        "harga" => "320.000.000",
        "gambar" => "W800CAFE.png"
    ],

];




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftat Motor W175</title>
</head>
<body>
    <h1>Daftar Motor W175</h1>
    <?php foreach($motor as $mtr) : ?>
        <ul>
            <li>
                <img src="IMG/<?= $mtr["gambar"]; ?>">
            </li>
            <li>Nama :<?php echo $mtr["nama"]; ?></li>
            <li>Tahun :<?php echo $mtr["tahun"]; ?></li>
            <li>Warna :<?php echo $mtr["warna"]; ?></li>
            <li>Harga :<?php echo $mtr["harga"]; ?></li>
        </ul>
        <?php endforeach; ?>
    
</body>
</html>