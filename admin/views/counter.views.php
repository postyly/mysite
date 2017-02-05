<?php
//достаем из базы все данные из таблицы u_hit
$link = db_connect();
$query = "SELECT ip, `date_time` FROM ip_stat";
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
            <?php foreach ($arr as $value): ?>
                <td><?= $value ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endwhile; ?>
</table>
