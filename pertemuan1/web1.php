<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web01</title>
</head>
<body>
    <h1>Selamat Bealajar Php</h1>
    <?php
       $_nama = "Hanif Bahrul";
       $_umur = 10;
       $_nama = "Teknik Informatika";
       $_ipk = 3.9;
    ?>

    <p>Nama : <?php echo $_nama; ?></p>
    <p>Umur : <?= $_umur?></p>
</body>
</html>