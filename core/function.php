<?php
function goBack()
{
    $url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';

    header("Location: $url");
}
function getFlesh($key)
{
    $result = $_SESSION[$key];
    unset($_SESSION[$key]);
    return $result;
}
function setFlesh($text, $key)
{
    $_SESSION[$key] = $text;
}