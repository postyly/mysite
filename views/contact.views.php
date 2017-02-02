<?php
echo ((isset($_SESSION['mail']) && $_SESSION['mail'] == true) ? "отправлено" : "") ;
unset($_SESSION['mail']);
?>
<div class="inner cover clearfix">
    <img class="center-block" style="width: 30%" src="../image/my_photo.jpg">
    <h1 class="cover-heading">Контактная информация.</h1>
    <div class="pull-left">
        <p class="lead">Местонахождение: город Минск</p>
        <p class="lead">телефон: +37529 8653830</p>
        <p class="lead">e-mail: postyly@gmail.com</p>
        <p class="lead">Вы можете отправить мне сообщение.</p>
        <form action="index.php?page=contact" method="post">
            <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="Текст сообщения" name="message_text"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ваш e-mail" required
                       name="sender_mail">
            </div>
            <button type="submit" class="btn btn-default" name="send">Отправить</button>
        </form>
    </div>
</div>