<?php
$select[0]['title'] = 'марки стали';
$select[0]['name'] = "steel_grade";
$select[0]['options'] = $steel_grade;

$input[0] =array('path' => 'input1',
                'label' => 'сторона квадрата а',
                'units' => 'мм.');
if ($_SESSION['role'] == 'weight'){
$input[1] =array('path' => 'input2',
                'label' => 'длина L',
                'units' => 'м.');
}
else{
    $input[1] =array('path' => 'input2',
        'label' => 'Вес',
        'units' => 'кг.');
}
$path = "Square";
$radio_button = true;
$title_img = "Квадрат";