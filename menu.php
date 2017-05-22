<?php
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI, PHP_URL_PATH);
    $components = explode('/', $path);
    $first_part = $components[2];
?>

<div class="container">
        <div class="navbar navbar-default">
            <div class="row">
                <div class="col-md-6">
                    <a class="hidden-xs hidden-sm" href="index.php">
                    <img src="img/logo.png" alt="Логотип" class="logo-wight" title="Логотип">
                    </a>
                </div>
                <div class="col-md-6">
                    <form action="#" class="navbar-form language">
                        <div class="pull-right hidden-xs ">
                            <a href="#" id="kz">Қаз</a> /<a
                                href="#" id="ru" class="lang">Рус</a></div>
                        <a href="index.php"><img src="img/logo.png"
                                                            class="hidden-md hidden-lg logo-mobile"></a>
                    </form>
                </div>

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Навигацияны ашу</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <div class="clearfix"></div>

                    <!-- /container -->
                    <div class="nav-home">
                        <ul class="nav navbar-nav">
                            <li class="<?php if ($first_part=="" || $first_part=="index.php") {echo "active"; }?>"><a href="index.php" title="Главная" tkey="main_menu">Главная</a></li>
                            <li class="<?php if ($first_part=="packages.php") {echo "active"; }?>"><a href="packages.php" title="Пакетные туры" tkey="packages">Пакетные туры</a></li>
                            <li class="<?php if ($first_part=="routes.php") {echo "active"; }?>"><a href="routes.php" title="Индивидуальные туры" tkey="air_turs">Индивидуальные туры</a></li>
                            <li class="<?php if ($first_part=="gallery.php") {echo "active"; }?>"><a href="gallery.php" title="Галерея" tkey="gallery">Галерея</a></li>
                            <li class="<?php if ($first_part=="contacts.php") {echo "active"; }?>"><a href="contacts.php" title="Контакты" tkey="contacts">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>