<?php 
$mahasiswa = [
    ["Budi", "21312432", "Ekonomi", "budi@gmail.com"],
    ["Bonay", "43212432", "Ekonomi", "baron@gmail.com"],
    ["Baron", "43212432", "Ekonomi", "baron@gmail.com"],
    ["Badri", "43212432", "Ekonomi", "baron@gmail.com"]



];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
  
    <?php foreach ( $mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama    :<?= $mhs [0]; ?></li>
        <li>NPM     :<?= $mhs [1]; ?></li>
        <li>Jurusan :<?= $mhs [2]; ?></li>
        <li>email   :<?= $mhs [3]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>