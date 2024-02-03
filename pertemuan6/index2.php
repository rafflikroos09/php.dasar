<?php 
// $mahasiswa =[ 
//     ["Budi", "23121432", "budi@gmail.com", "Ekonomi"],
//     ["Budi", "23121432", "budi@gmail.com", "Ekonomi"],
//     ["Budi", "23121432", "budi@gmail.com", "Ekonomi"],
//     ["Budi", "23121432", "budi@gmail.com", "Ekonomi"]
// ];

//array associative
//definisi sama seprti aaray numerik kecuali 
// key nya adalah string yang kita buat sendiri
$mahasiswa = [
        [
            "nama" => "Budi", 
            "NPM" => "213213", 
            "Email" => "budi@gmail.com", 
            "Jurusan" => "Ekonomi"
        ],
        [
            "nama" => "Bonay", 
            "NPM" => "2345222", 
            "Email" => "bonay@gmail.com", 
            "Jurusan" => "Hukum"
        ],

    ];


    echo $mahasiswa[0]["Email"];
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
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama :<?php echo $mhs["nama"]; ?></li>
            <li>NPM :<?php echo $mhs["NPM"]; ?></li>
            <li>Email :<?php echo $mhs["Email"]; ?></li>
            <li>Jurusan :<?php echo $mhs["Jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
    
</body>
</html>








