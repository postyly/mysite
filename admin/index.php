<?php
require_once "core/function.php";
require_once "core/varible.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<header>
<h1>Панель администратора</h1>

<ul class="nav nav-pills">
    <?php foreach ($menu as $item => $value):?>
        <li role="presentation"><a href="index.php?page=<?= $item ?>"><?= $value ?></a></li>
    <?php endforeach; ?>
</ul>
</header>

<?php
include_once "$include";
?>

<footer></footer>
</body>
</html>

