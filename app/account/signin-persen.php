<?php
session_start();
require "../bd/connect.php";
$login = filter_var(trim($_POST['login']));
$password = filter_var(trim($_POST['password']));
$submit = filter_var(trim($_POST['submit']));

$result = $connection->query( "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'");
if($result->num_rows == 1){
    $row_auth = $result->fetch_assoc();
    $_SESSION['user'] = array($row_auth['id'], $row_auth['login'], $row_auth['password'], $row_auth['ball']);
    header("location: ../../insideApp/hub.php");
}
else
{
    echo "FatalError";
}