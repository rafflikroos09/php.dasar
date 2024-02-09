<?php
// cek apkah tidak ada data di $_GET 
if( !isset($_GET["nama"]) || 
    !isset($_GET["tahun"]) ||
    !isset($_GET["warna"]) ||
    !isset($_GET["harga"]) ||
    !isset($_GET["gambar"])) {
    //redirect
    header("Location: index.php");
    exit;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    
<ul>
    <li><img src="IMG/<?= $_GET["gambar"]; ?>" alt=""></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["tahun"]; ?></li>
    <li><?= $_GET["warna"]; ?></li>
    <li><?= $_GET["harga"]; ?></li>
</ul>

<a href="index.php">Kembali ke halaman 1</a>
    
</body>
</html>