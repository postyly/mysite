<?php
//рассчет веса лента
if ($_SESSION['role'] == 'weight'){
    $density = isNumber($_POST['input']);
    $a = isNumber($_POST['input1']);
    $t = isNumber($_POST['input2']);
    $l = isNumber($_POST['input3']);

    $result = $a * $t * $l * $density / 1000;
//округляем до 0,01
    $result = round($result, 2);
    $result = "Вес = " . $result . " кг.";
}

//рассчет длина лента
else{
    $density = isNumber($_POST['input']);
    $a = isNumber($_POST['input1']);
    $t = isNumber($_POST['input2']);
    $weight = isNumber($_POST['input3']);

    $result = $weight * 1000 / ($a * $t * $density);
    $result = round($result, 3);
    $result = "Длина = " . $result . " м.";
}