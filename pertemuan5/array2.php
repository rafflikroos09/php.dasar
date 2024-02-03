<?php
// pengulangan pada array
// for /foreach
$angka = [3,2,16,43,23];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array2</title>
    <style>
        .kotak {
            width : 50px;
            height : 50px;
            background-color: salmon;
            text-align:center;
            line-height:50px;
            margin : 3px;
            float : left;
        }

        .clear {
            width : 50px;
            height : 50px;
            background-color: salmon;
            text-align:center;
            line-height:50px;
            margin : 3px;
            float : left;
        }

        .lord {
            width : 50px;
            height : 50px;
            background-color: salmon;
            text-align:center;
            line-height:50px;
            margin : 3px;
            float : left;
        }
        
    </style>
</head>
<body>
        <?php for( $i =0; $i < count($angka);$i++){ ?>
         <div class="kotak"><?php echo $angka[$i]; ?></div>
         <?php } ?>

         <br>
         <br>
         <br>

        <?php foreach($angka as $a) { ?>
            <div class="clear"><?php echo $a; ?></div>
        <?php } ?>

         <br>
         <br>
         <br>

         <?php foreach($angka as $a) : ?>
            <div class="lord"><?= $a; ?></div>
        <?php endforeach; ?>


</body>
</html>