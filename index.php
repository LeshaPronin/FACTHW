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
    <span>Задание 1</span>
  <?php
    $arr = [rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100)];
    for ($i=0; $i<12; $i++) {
        if ($arr[$i] % 2 == 0) {
            echo "<b>".$arr[$i]."</b>"."<br>";
        }
        else{
            echo $arr[$i]."<br>";
        }
    }
  ?>
    <span>Задание 2</span>
    <?php
    $strokearr = array( array("Базовые", "Принципы", "ООП"),
                        array("Абстракция", "Полиморфизм", "Наследование"),
                        array("Инкапсуляция", "Делегация", "Агрегация"),
                        );
    for ($s=0; $s<4; $s++) {
        for ($q=0; $q<4; $q++) {
            if(mb_substr($strokearr[$s][$q], 0, 1) == "А") {
                echo $strokearr[$s][$q]."<br>";
            }
        }
    }
    ?>
    <span>Задание 3</span>
    <?php
    $numarr = array( array(rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100)),
                    array(rand(0, 100), rand(0, 100), rand(0, 100)),
                    array(rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100)),
                    array(rand(0, 100)),
                    array(rand(0, 100), rand(0, 100))
    );
    echo "Количество элементов в массиве"."<br>";
    $h=1;
    $summassive=0;
    for ($v=0; $v<5; $v++) {
            echo $h.". строка в массиве ".count($numarr[$v])."<br>";
            $summassive=$summassive+count($numarr[$v]);
    $h++;
    }
    echo "Всего элементов в массиве - ".$summassive;
    ?>

</div>
</body>
</html>

