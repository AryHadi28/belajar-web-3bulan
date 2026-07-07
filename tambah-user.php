<?php

require 'koneksi.php';

if(isset($_POST["simpan"])){

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $kota = $_POST["kota"];

    $query = "INSERT INTO users(nama,email,kota)
              VALUES('$nama','$email','$kota')";

    mysqli_query($conn,$query);

    header("Location: users.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
</head>
<body>

<h1>Tambah User</h1>

<form method="POST">

    <p>
        Nama <br>
        <input type="text" name="nama">
    </p>

    <p>
        Email <br>
        <input type="email" name="email">
    </p>

    <p>
        Kota <br>
        <input type="text" name="kota">
    </p>

    <button type="submit" name="simpan">
        Simpan
    </button>

</form>

</body>
</html>