<?php

$nama = "Gaizka";
$umur = 29;
$kota = "Banten";
$pekerjaan = "Programmer";
$status = "Aktif";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil Gaizka</title>
</head>
<body>

    <h1><?= $nama ?></h1>

    <ul>
        <li>Umur: <?= $umur ?></li>
        <li>Kota: <?= $kota ?></li>
        <li>Pekerjaan: <?= $pekerjaan ?></li>
        <li>Status: <?= $status ?></li>
    </ul>

</body>
</html>