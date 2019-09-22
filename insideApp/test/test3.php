<?php
session_start();
array_push($_SESSION['test'], $_POST['test2']);
if ($_SESSION['test'] == NULL) {
    header("Location: /app");
    unset($_SESSION['test']);
    exit;
}
array_push($_SESSION['marks'], $_POST['q5'], $_POST['q6'], $_POST['q7'], $_POST['q8']);
if ($_GET['do'] == 'logout') {
    unset($_SESSION['user']);
    session_destroy();
}
if(!$_SESSION['user']){
    header("Location: /app");
    exit;
}

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
                <form action="test-total.php" method="post">
                    <div class="col">
                        <p>{---------------------------------9-----------------------------------}</p>
                        <p>9) Какой тег делает текст акцентированным:</p>
                        <label>1. <input name="q9" type="radio" value="a">&lt;b&gt; </label><br>
                        <label>2. <input name="q9" type="radio" value="b">&lt;italic&gt;</label><br>
                        <label>3. <input name="q9" type="radio" value="c">&lt;i&gt;</label><br>
                        <label>4. <input name="q9" type="radio" value="d">&lt;em&gt;</label>
                    </div>
                    <div class="mt-4">
                        <p>{---------------------------------10-----------------------------------}</p>
                        <p>10) Как открыть ссылку в номов окне:</p>
                        <label>1. <input name="q10" type="radio" value="a">&lt;a href-link="url" blank">Ссылка&lt;/a&gt; </label><br>
                        <label>2. <input name="q10" type="radio" value="b">&lt;a href="url" target="_blank">Ссылка&lt;/a&gt;</label><br>
                        <label>3. <input name="q10" type="radio" value="c">&lt;a href="url" target-new="blank">Ссылка&lt;/a&gt;</label><br>
                        <label>4. <input name="q10" type="radio" value="d">&lt;a href-link="url" target="blank">Ссылка&lt;/a&gt;</label>
                    </div>
                    <div class="mt-4">
                        <p>{---------------------------------11-----------------------------------}</p>
                        <p>11) Набор тегов относящиеся только к таблицам:</p>
                        <label>1. <input name="q11" type="radio" value="a">&lt;tr&gt;&lt;th&gt;&lt;td&gt;&lt;table&gt;&lt;em&gt;&lt;fm&gt;</label><br>
                        <label>2. <input name="q11" type="radio" value="b">&lt;tbody&gt;&lt;thead&gt;&lt;table&gt;&lt;tr&gt;&lt;th&gt;</label><br>
                        <label>3. <input name="q11" type="radio" value="c">&lt;tlink&gt;&lt;table&gt;&lt;th&gt;&lt;align&gt;&lt;veltical&gt;&lt;tmidle&gt;</label><br>
                        <label>4. <input name="q11" type="radio" value="d">&lt;hr&gt;&lt;thead&gt;&lt;tbody&gt;&lt;th&gt;&lt;thr&gt;</label><br>
                    </div>
                    <div class="mt-4">
                        <p>{---------------------------------12-----------------------------------}</p>
                        <p>12) Какой тег создает область для ввода нескольки строк текста?:</p>
                        <label>1. <input name="q12" type="radio" value="a">&lt;textarea&gt;</label><br>
                        <label>2. <input name="q12" type="radio" value="b">&lt;input type="textbox"&gt;</label><br>
                        <label>3. <input name="q12" type="radio" value="c">&lt;input type="textarea"&gt;</label><br>
                        <label>4. <input name="q12" type="radio" value="d">&lt;input type="textmesseg"&gt;</label><br>
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


