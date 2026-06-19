<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "belajar_php";

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

if (!$conn) {
    die("Koneksi gagal");
}

echo "Koneksi berhasil";

?>