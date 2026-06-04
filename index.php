<?php

$skills = [
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "Laravel"
];


?>

<ul>

<?php foreach($skills as $skill): ?>

    <li><?= $skill ?></li>

<?php endforeach; ?>

</ul>