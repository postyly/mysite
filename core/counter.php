<?php
//узнаем ip посетителя и сегодняшнюю дату
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y-m-d");

//соединимся с базой данных
$link = db_connect();

//если это первое посещение сайта за сегодня
$query = "SELECT id FROM ip_stat WHERE `date` = '$date'";
$result = mysqli_query($link, $query) or die('ошибка запроса к базе данных');
if (mysqli_num_rows($result) == 0) {
    //создаем запись в таблице hits
    $query = "INSERT INTO hits (`date`, `host`, hit) VALUES ('$date', 0, 0)";
    mysqli_query($link, $query) or die('ошибка записи в базу данных');

}
//проверяем первое ли сегодня посещение c этого ip
$query = "SELECT id FROM ip_stat WHERE `date`='$date' AND `ip` = '$ip'";
$result = mysqli_query($link, $query) or die('ошибка запроса к базе данных');

if (mysqli_num_rows($result) == 0) {
    //за сегодняшнюю дату, посещений с данным ip еще небыло
    //запишем ip и дату в таблицу ip_stat
    $query = "INSERT INTO ip_stat (`ip`, `date`) VALUES ('$ip', '$date')";
    mysqli_query($link, $query) or die('ошибка записи в базу данных');;
    //добавим 1 просмотр страницы и 1 уникальное посещение за сегодня
    $query = "UPDATE `hits` SET `host` = `host`+ 1, `hit` = `hit`+ 1 WHERE `date` = '$date'";
    mysqli_query($link, $query) or die('ошибка записи в базу данных');
} else {
    //за сегодняшнюю дату, посещения с данным ip уже были
    //добавим 1 hit
    $query = "UPDATE `hits` SET `hit` = `hit`+ 1 WHERE `date` = '$date'";
    mysqli_query($link, $query) or die('ошибка записи в базу данных');
}




