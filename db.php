<?php
$link = mysqli_connect('localhost', 'root', '', 'travel');
if (!$link) {
    die('Не удалось соединиться : ' . mysqli_error());
}

mysqli_set_charset($link,"utf8");