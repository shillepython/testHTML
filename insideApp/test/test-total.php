<?php
session_start();
unset($_SESSION['test']);
array_push($_SESSION['marks'], $_POST['q9'], $_POST['q10'], $_POST['q11'], $_POST['q12']);
$ot = 0;
$id = $_SESSION['user'][0];
if ($_SESSION['marks'][0] == b || $_SESSION['marks'][0] == c ) {
    $ot += 12;
}
if ($_SESSION['marks'][1] == a) {
    $ot+=12;
}
if ($_SESSION['marks'][2] == b) {
    $ot+=12;
}
if ($_SESSION['marks'][3] == b) {
    $ot+=12;
}
if ($_SESSION['marks'][4] == c) {
    $ot+=12;
}
if ($_SESSION['marks'][5] == a) {
    $ot+=12;
}
if ($_SESSION['marks'][6] == c) {
    $ot+=12;
}
if ($_SESSION['marks'][7] == c) {
    $ot+=12;
}
if ($_SESSION['marks'][8] == d) {
    $ot+=12;
}
if ($_SESSION['marks'][9] == b) {
    $ot+=12;
}
if ($_SESSION['marks'][10] == b) {
    $ot+=12;
}
if ($_SESSION['marks'][11] == a) {
    $ot+=12;
}
$summa = $ot/12;

require "../../app/bd/connect.php";
if (gettype($summa) == integer){
    $uppMarks = "UPDATE `users` SET ball='$summa' WHERE id='$id'";
    $connection->query($uppMarks);
    $sessionMarks = array($_SESSION['user']);
    $replacements = array(3 => $summa);
    array_replace($sessionMarks, $replacements);
    header('Location: /app');
}else {
    $errorMarks = 'Этот пользователь попытался обойти систему тестирования';
    $uppMarksError = "UPDATE `users` SET ball='$errorMarks' WHERE id='$id'";
    $connection->query($uppMarksError);
    echo 'Вы попытались обойти систему';
}
?>