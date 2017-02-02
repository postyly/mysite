<?php
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