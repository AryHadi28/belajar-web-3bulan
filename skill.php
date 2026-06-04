<?php

$nama = "Gaizka";

$skills = [
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "Laravel",
    "MySQL"
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Skills</title>
</head>
<body>

<h1><?= $nama ?></h1>

<h2>Daftar Skill</h2>

<ul>

<?php foreach($skills as $skill): ?>

    <li><?= $skill ?></li>

<?php endforeach; ?>

</ul>

</body>
</html>