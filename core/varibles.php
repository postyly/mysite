<?php
//пункты меню
$menu = array('main'=>'главная', 'portfolio'=>'портфолио','blog'=>'блог' ,'contact'=>'контакты');

//текущая страница
if (isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
    $page = "main";
