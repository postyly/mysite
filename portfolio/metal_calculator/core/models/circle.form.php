<?php
if ($_SESSION['path'] != "Circle"){
    session_input_to_0();
}
$select[0]['title'] = 'марки стали';
$select[0]['name'] = "steel_grade";
$select[0]['options'] = $steel_grade;

$input[0] = array('path' => 'input1',
                  'label' => 'Диаметр круга D',
                  'units' => 'мм.',
                  'value' => $_SESSION['input1']);
if ($_SESSION['role'] == 'weight'){
    $input[1] =array('path' => 'input2',
                    'label' => 'длина L',
                    'units' => 'м.',
                    'value' => $_SESSION['input2']);
    $title_img = "Расчет веса нержавеющего круга";
}
else{
    $input[1] =array('path' => 'input2',
                    'label' => 'Вес',
                    'units' => 'кг.',
                    'value' => $_SESSION['input2']);
    $title_img = "Расчет длины нержавеющего круга";
}

$_SESSION['path'] = "Circle";
$path = "Circle";
$radio_button = true;
