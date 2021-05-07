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
    <span>Задача 1</span>
    <?php
        $str1 = "fact";
        $arr1 = str_split($str1, 1);
        $arr1[0] = mb_strtoupper($arr1[0]);
        foreach ($arr1 as $key1 => $value1){
            echo $arr1[$key1];
        }
    ?>

    <span>Задача 2</span>

    <?php
        $str2 = "Фамилия Имя Отчество";
        $arr2 = explode (' ', $str2);
        $arr2[2] = "";
        for ($i2=1; $i2>-1; $i2=$i2-1) {
            echo $arr2[$i2]." ";
        }
    ?>

    <span>Задача 3</span>

    <?php
        $str3 = "Привет Мир";
        $arr3 = explode(' ', $str3);
        for ($i3=0; $i3<2; $i3++) {
            $arr4[$i3] = str_split($arr3[$i3], 2);
        }
        $let=0;
        for ($i4=0; $i4<2; $i4++) {
            for ($i5=0; $i5<20; $i5++) {
                if ($arr4[$i4][$i5]=="и" or $arr4[$i4][$i5] == "И") {
                    $let++;
                    echo "Количество букв И равна ".$let."<br>";
                }
            }
        }
    ?>

    <span>Задача 4</span>
    <?php
        $strlp = "html css php";
        $arrlp = explode(' ', $strlp);

        foreach ($arrlp as $key => $value){
            echo "Слово ".$arrlp[$key]."<br>";
        }
    ?>

    <span>Задача 5</span>
    <?php
        $strpng = "image.png";

        if (mb_substr($strpng, -4, 4) == ".png") {
            echo "Да";
        }
        else {
            echo "Нет, дай мне .png";
        }
    ?>

    <span>Домашнее задание</span>
    <span>Задание 1</span>
    <?php
        $str = "Kakoetoslovo";
        $dots = "...";
        $arrstr = str_split($str);
        if (count($arrstr)>5) {
            for ($istr=0; $istr<3; $istr++) {
                $arrstr[$istr] = " ";
            }
            $str = implode($arrstr);
            echo $str.$dots;
        }
        else {
            echo $str;
        }

    ?>

    <span>Задание 2</span>

    <?php
        $stroke = "abgregbatcor";
        echo str_replace(array("a", "b", "c"),
                        array("1", "2", "3"), $stroke);
    ?>

    <span>Задание 3</span>

    <?php
        $strokeabc = "abc abc abc";
        echo strrpos($strokeabc, 'b');
    ?>

    <span>Задание 4</span>

    <?php
        $strokehtml = "html css php";
        $arrhtml = explode(' ', $strokehtml);
        print_r($arrhtml);
    ?>
    <span>Задание 5</span>

    <?php
        $date1 = date_create("10-02-2015");
        $date2 = date_create("11-03-2021");
        $result = date_diff($date1,$date2);
        echo "Количество дней между датами -". $result->days;
    ?>
</div>
</body>
</html>

