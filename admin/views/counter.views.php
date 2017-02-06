<?php
//достаем из базы все данные из таблицы u_hit
$link = db_connect();
$query = "SELECT ip, UNIX_TIMESTAMP(`date_time`) FROM ip_stat";
$result = mysqli_query($link, $query) or die('Ошибка запроса к базе данных');

//достаем из базы данных статистику просмотров и уникальных посещений
$query = "SELECT `date`, `host`, `hit` FROM hits";
$result_hits = mysqli_query($link, $query) or die('Ошибка запроса к базе данных');
?>
<h1>Статистика посещений</h1>
<!--статистика ip аресов и время входа-->

<table border="1" class="pull-left">
    <tr>
        <th>ip addres</th>
        <th>date</th>
    </tr>
    <?php while ($arr = mysqli_fetch_row($result)): ?>
        <tr>
            <td><?= $arr[0] ?></td>
            <td><?= date("Y-m-d, H:i:s", $arr[1]) ?></td>
        </tr>
    <?php endwhile; ?>
</table>
<!--статистика уникальных посещений и просмотров-->
<table border="1" class="pull-right">
    <tr>
        <th>дата</th>
        <th>уникальных посещений</th>
        <th>просмотров</th>
    </tr>

    <?php while ($arr = mysqli_fetch_row($result_hits)): ?>
        <tr>
            <td><?= $arr[0] ?></td>
            <td><?= $arr[1] ?></td>
            <td><?= $arr[2] ?></td>
        </tr>
    <?php endwhile; ?>

</table>