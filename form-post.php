<!DOCTYPE html>
<html>
<body>

<h1>Form Biodata</h1>

<form method="POST">

    <input
        type="text"
        name="nama"
        placeholder="Nama"
    >

    <br><br>

    <input
        type="number"
        name="umur"
        placeholder="Umur"
    >

    <br><br>

    <button type="submit">
        Simpan
    </button>

</form>

<?php

if(isset($_POST["nama"]))
{
    echo "<h2>Data Berhasil Diterima</h2>";

    echo "Nama: " . $_POST["nama"];
    echo "<br>";

    echo "Umur: " . $_POST["umur"];
}

?>

</body>
</html>