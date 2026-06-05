<?php

$team = [
    [
        "nama" => "Budi",
        "role" => "Frontend"
    ],
    [
        "nama" => "Andi",
        "role" => "Backend"
    ],
    [
        "nama" => "Siti",
        "role" => "UI Designer"
    ]
];

function tampilRole($role)
{
    return strtoupper($role);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Team</title>
</head>
<body>

<h1>Daftar Team</h1>

<ul>

<?php foreach($team as $anggota): ?>

<li>
    <?= $anggota["nama"] ?>
    -
    <?= tampilRole($anggota["role"]) ?>
</li>

<?php endforeach; ?>

</ul>

</body>
</html>