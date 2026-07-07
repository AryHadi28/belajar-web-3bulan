<?php

require 'koneksi.php';

$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar User</title>
</head>
<body>

<h1>Daftar User</h1>

<ul>

<?php while($user = mysqli_fetch_assoc($result)): ?>

    <li>
        <?= $user["nama"] ?>
        -
        <?= $user["email"] ?>
        -
        <?= $user["kota"] ?>
    </li>

<?php endwhile; ?>

</ul>

</body>
</html>