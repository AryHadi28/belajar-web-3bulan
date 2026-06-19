<!DOCTYPE html>
<html>
<body>

<h1>Form Registrasi</h1>

<form method="POST">

    <input
        type="text"
        name="nama"
        placeholder="Nama"
    >

    <br><br>

    <input
        type="text"
        name="email"
        placeholder="Email"
    >

    <br><br>

    <input
        type="text"
        name="kota"
        placeholder="Kota"
    >

    <br><br>

    <button type="submit">
        Simpan
    </button>

</form>

<?php

if(isset($_POST["nama"]))
{
    echo "<h2>=== DATA REGISTRASI ===</h2>";

    echo "Nama: " . $_POST["nama"];
    echo "<br>";

    echo "Email: " . $_POST["email"];
    echo "<br>";

    echo "Kota: " . $_POST["kota"];
}

?>

</body>
</html>