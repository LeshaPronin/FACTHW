<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>HomeWork Pronin 10.05.</title>
</head>
<body>
<h1>Задания</h1>
<div class="container">

    <span>Задание 1</span>
    <form action="#" method="post">
        <label for="checkbox">Чекбокс 1</label>
        <input type="checkbox" name="checkbox"><br>

        <label for="checkbox">Чекбокс 2</label>
        <input type="checkbox" name="checkbox"><br>

        <label for="checkbox">Чекбокс 3</label>
        <input type="checkbox" name="checkbox"><br>


        <label for="radio">Радио 1</label>
        <input type="radio" name="radio"><br>

        <label for="radio">Радио 2</label>
        <input type="radio" name="radio"><br>

        <label for="radio">Радио 3</label>
        <input type="radio" name="radio"><br>


        <input type="text" name="text"><br>

        <textarea name="textarea" id="" cols="22" rows="9"></textarea><br>
        <input type="submit">
    </form>
    <?php
    echo "Чекбокс: ".$_POST['checkbox']."<br>";
    echo "Радио: ".$_POST['radio']."<br>";
    echo "Короткий текст: ".$_POST['text']."<br>";
    echo "Длинный текст: ".$_POST['textarea']."<br>";
    ?>

    <span>Задание 2</span>

    <form action="" method="post">
        <label for="login">Логин:</label>
        <select name="login">
            <option value="v1">Админ</option>
            <option value="v2">Не админ</option>
            <option value="v3">Еще не админ</option>
            <option value="v4">И ещё не админ</option>
            <option value="v5">Ну и ещё не админ</option>
        </select>
        <label for="password">Пароль:</label>
        <input type="password" name="password">
        <input type="submit">
    </form>
    
    <?php

    $login = $_POST['login'];
    $pass = $_POST['password'];

    if ($login=="v1" && $pass=="123321qwe") {
        echo "<script>self.location='/admin.php';</script>";
    }
    else {
        echo "Неверный логин или пароль";
    }
    ?>

    <span>Задание 3</span>

    <form action="" method="post">
        <select name="link" id="">
            <option value="1">Лаб 1</option>
            <option value="2">Лаб 2</option>
            <option value="3">Лаб 3</option>
            <option value="4">Лаб 4</option>
        </select>
        <input type="submit">
    </form>

    <?php
        $nomber=$_POST['link'];

        echo "Ссылка на лабораторную - ";
    ?>
    <a href="<?echo "phpcourse.php?l=".$nomber;?>"><?echo "phpcourse.php?l=".$nomber;?></a>
</body>
</html>

