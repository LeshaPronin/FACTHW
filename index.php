<?php
    session_start();
    $_SESSION['login'] = "Regina";
    $_SESSION['pass'] = "1111";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="container">
        <form class="form" action="" method="post">
            <input placeholder="Логин" type="text" name="login">
            <input placeholder="Пароль" type="text" name="pass">
            <div class="error">
                <?php
                    if ($_SESSION['login']==$_POST['login'] && $_SESSION['pass']==$_POST['pass']) {
                        echo '<script>window.location.href = "admin.php";</script>';
                    }

                    else {
                        echo "Не верный логин или пароль";
                    }
                ?>
            </div>
            <input class="submit" type="submit">
        </form>
    </div>
</body>
</html>