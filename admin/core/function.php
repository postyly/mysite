<?php
//соединение с базой данных
const USER = 'admin';
const DB_NAME = 'u272860375_admin';
const PWD = 'rfcnthnhjq';
const HOST = 'localhost';

function db_connect()
{
    return mysqli_connect(HOST, USER, DB_NAME, DB_NAME);
}
