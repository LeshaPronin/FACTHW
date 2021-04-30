<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>HomeWork Pronin</title>
</head>
<body>
<div class="container">
    <span>Задание 1 <br></span>
    <?php
    $chislo=5;
    while ($chislo>=5 and $chislo<=13) {
        echo $chislo.'<br>';
        $chislo++;
    }
    ?>
    <span>Задание 2 (Цикл While) <br></span>
    <?php
    $num=1000;
    while ($num>50) {
        echo $num.'<br>';
        $num=$num/2;
    }
    ?>
    <span>Задание 2 (Цикл For) <br></span>
    <?php
    for ($numfor=1000; $numfor>50;$numfor=$numfor/2) {
        echo $numfor.'<br>';
    }
    ?>
    <span>Задание 3 <br></span>

    <?php
    $array = array("0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10", "0, 1, 2, 3, 4, 5, 6, 7, 8, 9", "0, 1, 2, 3, 4, 5, 6, 7, 8", "0, 1, 2, 3, 4, 5, 6, 7", "0, 1, 2, 3, 4, 5, 6", "0, 1, 2, 3, 4, 5", "0, 1, 2, 3, 4", "0, 1, 2, 3", "0, 1, 2", "0, 1", "0");
        for ($i=0; $i<=10; $i++) {
            echo $array[$i].'<br>';
        }
    ?>
</div>
</body>
</html>

