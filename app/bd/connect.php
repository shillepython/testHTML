<?php
$connection = new mysqli("localhost", "root", "", "testhtml");
if ($connection->connect_error) {
    die('Ошибка подключения (' . $connection->connect_errno . ') '
        . $connection->connect_error);
}