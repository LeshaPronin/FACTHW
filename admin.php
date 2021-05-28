<?php
    session_start();
?>
<!doctype html>
<html style="background: <?echo $_POST['bgcolor'];?>;" lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Административная панель</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="username">
            Пользователь: <? echo $_SESSION['login']; ?>
        </div>
        <a class="exit" href="<?php session_destroy(); echo 'index.php';?>">Выйти</a>
    </div>

    <div class="settings">
        Сменить цвет фона
        <form method="post" action="">
            <select name="bgcolor" id="1">
                <option value="#BCE784">Желтый</option>
                <option value="#5DD39E">Зеленый</option>
                <option value="#348AA7">Синий</option>
            </select>
            <input type="submit">
        </form>
    </div>

    <a href="<? echo "fact.php";?>">Страница "Факт"</a>
    <a href="<? echo "bitrix.php";?>">Страница "Bitrix"</a>
    <br>
    Страница, которую вы посетили: <? echo $_SESSION['site'];?>
</body>
</html>