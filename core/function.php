<?php

//соединение с базой данных для боевого
/*const DB_USER = 'u272860375_admin';
const DB_NAME = 'u272860375_admin';
const DB_PWD = 'cQEBrvRuIlJ2';
const DB_HOST = 'localhost';

function db_connect()
{
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die('Глобально Соединение с базой данных не установленно');
    return $link;
}*/
//соединение с базой данных локально
const DB_USER = 'admin';
const DB_NAME = 'u272860375_admin';
const DB_PWD = '5Eq2p8';
const DB_HOST = 'localhost';

function db_connect()
{
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die('Соединение с базой данных не установленно');
    return $link;
}

function goBack()
{
    $url = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '/';

    header("Location: $url");
    exit();
}

function setFlash($key, $value)
{
    $_SESSION[$key] = $value;
}

function hasFlash($key)
{
    return array_key_exists($key, $_SESSION);
}

function getFlash($key)
{
    $val = $_SESSION[$key];
    unset($_SESSION[$key]);

    return $val;
}
function isGET()
{
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}
function isPost()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}
