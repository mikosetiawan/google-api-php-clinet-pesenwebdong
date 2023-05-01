<?php


session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil Login!</title>
</head>

<body>
    <h3>Selamat Datang <?= $_SESSION['info']['name'] ?></h3>
    <ul>
        <li><img src="<?= $_SESSION['info']['picture'] ?>" alt=""></li>
        <li>email : <?= $_SESSION['info']['email'] ?></li>
    </ul>
</body> 

</html>