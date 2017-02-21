
<div class="cover-container">

    <div class="masthead clearfix">
        <div class="inner">
            <nav class="navigation">
                <ul class="nav masthead-nav">
<!--                    отрисовываем меню-->
                    <?php foreach ($menu as $value => $item): ?>
                        <li <?= ($page == $value) ? "class='active'" : "" ;?>><a href="index.php?page=<?= $value ?>"><?= $item ?></a></li>
                    <?php endforeach;?>
                </ul>
            </nav>
        </div>
    </div>