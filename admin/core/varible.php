<?php
$menu = array('main' => 'Главная', 'count' => 'Счетчик посещений', 'blog' => 'Блог', 'mail' => 'Почта');

//определяет текущую страницу
if (isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 'main';
}

switch ($page)
{
    case 'main':
        $title = 'Главная';
        $include = 'views/index.views.php';
        break;
    case 'count':
        $title = 'Счетчик посещений';
        $include = 'views/counter.views.php';
        break;
    case 'blog':
        $title = 'Блог';
        $include = 'views/blog.views.php';
        break;
    case 'mail':
        $title = 'Почта';
        $include = 'views/mail.views.php';
        break;
    default:
        $title = '404';
        $include = 'views/404.views.php';
        break;
}