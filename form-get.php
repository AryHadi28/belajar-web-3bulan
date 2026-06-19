<!DOCTYPE html>
<html>
<body>

<h1>Cari Data</h1>

<form method="GET">

    <input
        type="text"
        name="keyword"
        placeholder="Masukkan kata kunci"
    >

    <button type="submit">
        Cari
    </button>

</form>
<?php

if(isset($_GET["keyword"]))
{
    echo "<h2>Hasil Pencarian:</h2>";
    echo $_GET["keyword"];
}

?>
</body>
</html>