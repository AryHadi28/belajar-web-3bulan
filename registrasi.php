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

<?php if(isset($_POST["nama"])): ?>

<h2>=== DATA REGISTRASI ===</h2>

<p>Nama: <?= $_POST["nama"] ?></p>
<p>Email: <?= $_POST["email"] ?></p>
<p>Kota: <?= $_POST["kota"] ?></p>

<?php endif; ?>

</body>
</html>