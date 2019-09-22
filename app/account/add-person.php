<?php
require "../bd/connect.php";
$login = filter_var(trim($_POST['login']));
$password = filter_var(trim($_POST['password']));
$submit = $_POST['submit'];
$ball = 'Тест не пройден';
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$result = $connection->query("SELECT * FROM `users` WHERE login = '$login'");
$num = $result->num_rows;
if($num == 0) {
        if ($connection->query("INSERT INTO `users` (login,password,ball) VALUE ('$login','$password','$ball')")) {
        header("Location: /app");
    } else {
        header("Location: ../register/register.php");
    }
}else {
        header("Location: ../register/register.php");
}