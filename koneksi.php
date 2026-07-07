<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "belajar_php"
);

if (!$conn) {
    die("Koneksi Database Gagal");
}