<?php
session_start();
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
    <link rel="stylesheet" href="../app/css/style.css">
    <title>Black Jack</title>
</head>
<body>

<div class="container-fluid">
    <div class="containers hub-h2 hub-h3">
        <h2>На этой странице результаты всех пользователей</h2>
        <h3>Думаешь хорошо знаешь HTML?<br><a class="test-href" href="test/test.php">Попробуй пройти тест!</a></h3>

        <div class="row form-div">
            <a href="?do=logout" class="text-center mb-5 text-out">Выход</a>
            <?php
            // Параметры для подключения

            require "../app/bd/connect.php";
            $query ="SELECT * FROM users";
            $result = $connection->query($query) or die("Ошибка " . mysqli_error($connection));
            if($result)
            {
                $rows = mysqli_num_rows($result); // количество полученных строк
                echo "<table class='table text-center table-striped table-dark'><thead class='thead-dark'>
    <tr>
    <th scope='col'>Name</th>
    <th scope='col'>Marks</th>
    </tr>
</thead class='thead-light'>";
                for ($i = 0 ; $i < $rows ; ++$i)
                {
                    $row = $result->fetch_row();
                    echo "<tr>";
                    for ($j = 1 ; $j < 2 ; ++$j) echo "<td width='300px'>$row[$j]</td>";
                    for ($j = 3 ; $j < 4 ; ++$j) echo "<td width='300px'>$row[$j]</td>";
                    echo "</tr>";
                }
                echo "<thead class='thead-dark'>
    <tr>
      <th scope='col'>Name</th>
      <th scope='col'>Marks</th>
    </tr>
</thead>";
                echo "</table>";

                // очищаем результат
                mysqli_free_result($result);
            }


            mysqli_close($connection);
            ?>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
