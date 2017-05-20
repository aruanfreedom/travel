<?php
$link = mysqli_connect('localhost', 'root', '', 'travel');
//$link = mysqli_connect('localhost', 'id865648_aruan', 'aruan123', 'id865648_travel');
if (!$link) {
    die('Не удалось соединиться : ' . mysqli_error());
}

mysqli_set_charset($link,"utf8");