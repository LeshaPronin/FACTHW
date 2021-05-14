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
        function fun1($arr1) {
            foreach ($arr1 as $key1 => $value1) {
                $arr1[$key1] = rand(1, 100);
                echo $arr1[$key1]."<br>";
            }

            return ($arr1);
        }

        $arr1 = array("1", "2", "3", "4", "5");
        fun1($arr1);
    ?>

    <span>Задание 2</span>

    <?php
        $stroke = "HTML, CSS, PHP, BITRIX";

        function fun2($stroke) {
            $str1 = explode (', ', $stroke);
            $count = 0;
            foreach ($str1 as $key2=>$value2) {
                $count++;
            }
            echo "Количество слов в строке = ".$count;
        }
        fun2($stroke);
    ?>

    <span>Задание 3</span>

    <?php
        $stroke2 = "HTML, CSS, PHP, BITRIX";

        function fun3($stroke2) {
            $str2 = explode(', ', $stroke2);
            for ($i=0; $i<5; $i++) {
                $bukv[$i] = str_split($str2[$i]);
            }
            $c=0;
            for ($u=3; $u>=0; $u=$u-1) {
                foreach ($bukv[$u] as $key4=>$value4) {
                    $c++;
                }
                for ($c; $c>=0; $c=$c-1) {
                    echo $bukv[$u][$c];
                }
            }
        }

        fun3($stroke2);

    ?>

    <span>Задание 4</span>

    <?php
        $stroke4 = "HTML, CSS, PHP, BITRIX";

        function fun4($stroke4) {
            $count4 = strlen($stroke4);
            echo $count4;

        }

        fun4($stroke4);
    ?>

    <span>Задание 5</span>

    <?php
    $stroke5 = "HTML, CSS, PHP, BITRIX";

    function fun5($stroke5) {
        $str5 = explode(', ', $stroke5);
        for ($x=0; $x<4; $x++) {
            $bukv5[$x] = str_split($str5[$x]);
        }

        for ($u=3; $u>=0; $u=$u-1) {
            for ($c=0; $c<7; $c++) {
                echo $bukv5[$u][$c]."<br>";
            }
        }
    }

    fun5($stroke5)
    ?>
</body>
</html>

