<?php

$users = [
    [
        "nama" => "Budi",
        "umur" => 25
    ],
    [
        "nama" => "Andi",
        "umur" => 30
    ],
    [
        "nama" => "Siti",
        "umur" => 27
    ]
];


?>

<ul>

<?php
foreach ($users as $user) {
    echo $user["nama"];
}
?>

</ul>