<?php
//достаем из базы все данные из таблицы u_hit
$link = db_connect();
$query = "SELECT ip, UNIX_TIMESTAMP(`date_time`) FROM ip_stat";
$result = mysqli_query($link, $query) or die('Ошибка БД');

?>
<h1>Статистика посещений</h1>
<table border="1">
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
