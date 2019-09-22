<?php
session_start();
$_SESSION['test'] = array();
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
            <form action="test2.php" method="post">
                <input type="hidden" name="test1">
                <div class="col">
                    <p>{---------------------------------1-----------------------------------}</p>
                    <p>1) Какой из представленных вариантов является валидным:</p>
                    <label>1. <input name="q1" type="radio" value="a">&lt;a href-link="page.html#17">Ссылка&lt;/a&gt; </label><br>
                    <label>2. <input name="q1" type="radio" value="b">&lt;a href="page.html">Ссылка&lt;/a&gt;</label><br>
                    <label>3. <input name="q1" type="radio" value="c">&lt;a href="page.html#top">Ссылка&lt;/a&gt;</label><br>
                    <label>4. <input name="q1" type="radio" value="d">&lt;a href-link="page.html#top">Ссылка&lt;/a&gt;</label>
                </div>
                <div class="mt-4">
                    <p>{---------------------------------2-----------------------------------}</p>
                    <p>2) Какой из представленных вариантов является валидным:</p>
                    <label>1. <input name="q2" type="radio" value="a">&lt;img src="foto.jpg" alt="Изображение" /&gt; </label><br>
                    <label>2. <input name="q2" type="radio" value="b">&lt;img src="foto.jpg" type="Изображение"&gt;</label><br>
                    <label>3. <input name="q2" type="radio" value="c">&lt;img src="foto.jpg" title="Изображение"&gt;</label><br>
                    <label>4. <input name="q2" type="radio" value="d">&lt;img src="foto.jpg" title="Изображение" /&gt;</label><br>
                </div>
                <div class="mt-4">
                    <p>{---------------------------------3-----------------------------------}</p>
                    <p>3) Какой из этих тэгов является нумерованым списоком:</p>
                    <label>1. <input name="q3" type="radio" value="a">&lt;ul&gt;</label><br>
                    <label>2. <input name="q3" type="radio" value="b">&lt;ol&gt;</label><br>
                    <label>3. <input name="q3" type="radio" value="c">&lt;tr&gt;</label><br>
                    <label>4. <input name="q3" type="radio" value="d">&lt;hr&gt;</label><br>
                </div>
                <div class="mt-4">
                    <p>{---------------------------------4-----------------------------------}</p>
                    <p>4) Какой тег является дочерним для &lt;!DOCTYPE&gt;:</p>
                    <label>1. <input name="q4" type="radio" value="a">&lt;body&gt;</label><br>
                    <label>2. <input name="q4" type="radio" value="b">&lt;html&gt;</label><br>
                    <label>3. <input name="q4" type="radio" value="c">&lt;link&gt;</label><br>
                    <label>4. <input name="q4" type="radio" value="d">&lt;href&gt;</label><br>
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
