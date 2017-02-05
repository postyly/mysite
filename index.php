<?php
error_reporting(E_ALL);
session_start();
require_once "core/varibles.php";
require_once "core/function.php";
require_once "core/counter.php";


//было отправлено сообщение
if (isPost() && isset($_POST['send'])) {
    //проверить введен ли емейл
    if (isset($_POST['sender_mail'])) {
        //проверить введено ли сообщение
        if (isset($_POST['message_text'])) {
            $message_text = strip_tags($_POST['message_text']);
            $sender_mail = $_POST['sender_mail'];
            if (mail("postyly@gmail.com", $sender_mail, $message_text)) {
                setFlash('success', 'Ваше сообщение отправлено');
                goBack();
            }

        }
    }
    //проверить введено ли сообщение
    //редактировать введенные пользователем данные
    //отправить почту на мой емейл
    //отобразить сообщение об удачном отправлении
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">
        <!--header-->
        <?php include_once "views/head.views.php"; ?>

        <?php include_once "views/partials/alert.php"; ?>
        <!--main-->

        <?php include_once $include; ?>
        <!--footer-->
        <?php include_once "views/footer.views.php"; ?>

    </div>

</div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
