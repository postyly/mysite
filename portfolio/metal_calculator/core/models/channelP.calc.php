<?php
//рассчет веса швеллер
if ($_SESSION['role'] == 'weight'){
    $density = isNumber($steel_grade[$_POST['input']]);
    $a = isNumber($_POST['input1']);
    $b = isNumber($_POST['input2']);
    $t = isNumber($_POST['input3']);
    $l = isNumber($_POST['input4']);
    $_SESSION['input'] = $_POST['input'];
    $_SESSION['input1'] = $a;
    $_SESSION['input2'] = $b;
    $_SESSION['input3'] = $t;
    $_SESSION['input4'] = $l;
    $weight = (($a * $b) - ($a - 2 * $t) * ($b - $t)) * $l * $density / 1000;
//округляем до 0,01
    $weight = round($weight, 2);
    $control = $weight;
    $result = "Вес = " . $weight . " кг.";
}

//рассчет длина швеллер
else{
    $density = isNumber($steel_grade[$_POST['input']]);
    $a = isNumber($_POST['input1']);
    $b = isNumber($_POST['input2']);
    $t = isNumber($_POST['input3']);
    $weight = isNumber($_POST['input4']);
    $_SESSION['input'] = $_POST['input'];
    $_SESSION['input1'] = $a;
    $_SESSION['input2'] = $b;
    $_SESSION['input3'] = $t;
    $_SESSION['input4'] = $weight;
    if ($a == 0 or $b == 0 or $t == 0 or $weight == 0){
        $length = 0;
        $control = $length;
    }
    else {
        $length = $weight * 1000 / ($density * (($a * $b) - ($a - 2 * $t) * ($b - $t)));;
        $length = round($length, 3);
        $control = $length;
    }
    $result = "Длина = " . $length . " м.";
}