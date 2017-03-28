<?php
$alert = '';
//пункты меню
$menu = array('main' => 'главная', 'portfolio' => 'портфолио', 'certificate' => 'сертификаты', 'contact' => 'контакты');

//текущая страница
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "main";
}

switch ($page) {
    case "main":
        $include = "views/main.views.php";
        $title = "азаркевич иван";
        break;
    case "portfolio":
        $include = "views/portfolio.views.php";
        $title = "portfolio";
        break;
    case "certificate":
        $include = "views/certificate.views.php";
        $title = "certificate";
        break;
    case "contact":
        $include = "views/contact.views.php";
        $title = "contact";
        break;
    default:
        $include = "views/404.views.php";
        $title = "404";
}
