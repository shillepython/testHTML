<?php
session_start();
array_push($_SESSION['test'], $_POST['test1']);
if ($_SESSION['test'] == NULL) {
    header("Location: /app");
    unset($_SESSION['test']);
    exit;
}
$_SESSION['marks'] = array($_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4']);
if ($_GET['do'] == 'logout') {
    unset($_SESSION['user']);
    session_destroy();
}
if(!$_SESSION['user']){
    header("Location: /app");
    exit;
}
$name = $_SESSION['user'][1];
$marks = $_SESSION['user'][3];
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../app/css/style.css">
    <title>HTML-test</title>
    <style>
        * {
            color: white;
        }
        body {
            height: 300%;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="containers hub-h2 hub-h3">
        <div class="row form">
            <h2>Тест по HTML - middle уровень</h2>
            <div class="container-form">
                <form action="test3.php" method="post">
                    <input type="hidden" name="test2">
                    <div class="col">
                        <p>{---------------------------------5-----------------------------------}</p>
                        <p>5) HTML это:</p>
                        <label>1. <input name="q5" type="radio" value="a">Home Tool Markup Language </label><br>
                        <label>2. <input name="q5" type="radio" value="b">Hyperlinks And Text Markup Language</label><br>
                        <label>3. <input name="q5" type="radio" value="c">Hyper Text Markup Language</label><br>
                        <label>4. <input name="q5" type="radio" value="d">Hetonic Textium Markup Language</label>
                    </div>
                    <div class="mt-4">
                        <p>{---------------------------------6-----------------------------------}</p>
                        <p>6) Укажите верный тег создания самого большого заголовка</p>
                        <label>1. <input name="q6" type="radio" value="a">&lt;h1&gt; </label><br>
                        <label>2. <input name="q6" type="radio" value="b">&lt;p3&gt;</label><br>
                        <label>3. <input name="q6" type="radio" value="c">&lt;h6&gt;</label><br>
                        <label>4. <input name="q6" type="radio" value="d">&lt;header&gt;</label><br>
                    </div>
                    <div class="mt-4">
                        <p>{---------------------------------7-----------------------------------}</p>
                        <p>7) Выберите верный метод для указания фонового цвета в HTML:</p>
                        <label>1. <input name="q7" type="radio" value="a">&lt;background&gt;blue&lt;/background&gt;</label><br>
                        <label>2. <input name="q7" type="radio" value="b">&lt;body bg="blue"&gt;</label><br>
                        <label>3. <input name="q7" type="radio" value="c">&lt;body style="backgroung-color: red;"&gt;</label><br>
                        <label>4. <input name="q7" type="radio" value="d">&lt;body inline-css="backgroung-color: red;"&gt;</label><br>
                    </div>
                    <div class="mt-4">
                        <p>{---------------------------------8-----------------------------------}</p>
                        <p>8) При помощи какого тега создаётся важный текст:</p>
                        <label>1. <input name="q8" type="radio" value="a">&lt;important&gt;</label><br>
                        <label>2. <input name="q8" type="radio" value="b">&lt;b&gt;</label><br>
                        <label>3. <input name="q8" type="radio" value="c">&lt;strong&gt;</label><br>
                        <label>4. <input name="q8" type="radio" value="d">&lt;imort&gt;</label><br>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Далее">
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

