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
<h1>Домашняя работа</h1>
<div class="container">
    <span>Задание 1</span>

    <form action="" method="post">
        <label for="login">Логин</label><br>
        <input type="text" name="login">
        <br>
        <label for="text">Комментарий</label><br>
        <input type="text" name="text">
        <br>
        <input type="submit">
    </form>

    <?php
        $login = $_POST['login'];
        $text = $_POST['text'];

        $message = "$login\n$text";

        mail("test@otus.ru", "Тема письма", "$message");
    ?>

    <span>Задание 2</span>

    <form action="" method="post">
        <label for="log">Логин</label>
        <input name="log" type="text">
        <label for="pass">Пароль</label>
        <input name="pass" type="password">
        <input type="submit">
    </form>
    <?php
        $log = $_POST['log'];
        $pass = $_POST['pass'];

    $pss_hash = password_hash("$pass", PASSWORD_DEFAULT);
    $message2 = "$log\n$pss_hash";

        mail("test@otus.ru", "Логин и хешированный пароль", "$message2");
    ?>

    <span>Задание 3</span>

    <form action="" method="post">
        <div class="quest">
            Я запоминаю важную информацию о других с целью использовать ее против них в будущем
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q1" value="0">
            <label for="No">Нет</label>
            <input type="radio" name="q1" value="1">
        </div>

        <div class="quest">
            Я считаю себя особенным человеком
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q2" value="0">
            <label for="No">Нет</label>
            <input type="radio" name="q2" value="1">
        </div>

        <div class="quest">
            Я часто не доверяю другим людям
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q3" value="1">
            <label for="No">Нет</label>
            <input type="radio" name="q3" value="0">
        </div>

        <div class="quest">
            Я избегаю конфликтов с людьми, которые могут понадобиться мне в будущем
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q4" value="0">
            <label for="No">Нет</label>
            <input type="radio" name="q4" value="1">
        </div>

        <div class="quest">
            Меня не волнует, оскорбляю ли я других людей
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q5" value="0">
            <label for="No">Нет</label>
            <input type="radio" name="q5" value="1">
        </div>

        <div class="quest">
            Мне нравится управлять другими
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q6" value="0">
            <label for="No">Нет</label>
            <input type="radio" name="q6" value="1">
        </div>

        <div class="quest">
            Другие считают мой образ жизни бурным и увлекательным
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q7" value="0">
            <label for="No">Нет</label>
            <input type="radio" name="q7" value="1">
        </div>

        <div class="quest">
            Я придерживаюсь только тех правил и законов, которые считаю разумными
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q8" value="0">
            <label for="No">Нет</label>
            <input type="radio" name="q8" value="1">
        </div>

        <div class="quest">
            Эмоции других людей — это их проблемы, а не мои
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q9" value="1">
            <label for="No">Нет</label>
            <input type="radio" name="q9" value="0">
        </div>

        <div class="quest">
            Я злюсь чаще, чем большинство моих знакомых
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q10" value="1">
            <label for="No">Нет</label>
            <input type="radio" name="q10" value="0">
        </div>

        <div class="quest">
            Люди слушаются меня, потому что они меня боятся
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q11" value="0">
            <label for="No">Нет</label>
            <input type="radio" name="q11" value="1">
        </div>

        <div class="quest">
            Я не уважаю людей, которые неразумно делятся своими секретами
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q12" value="0">
            <label for="No">Нет</label>
            <input type="radio" name="q12" value="1">
        </div>

        <div class="quest">
            В общем я лучше других
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q13" value="1">
            <label for="No">Нет</label>
            <input type="radio" name="q13" value="0">
        </div>

        <div class="quest">
            У меня часто возникает желание оскорбить или унизить людей, которые меня раздражают
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q14" value="1">
            <label for="No">Нет</label>
            <input type="radio" name="q14" value="0">
        </div>

        <div class="quest">
            Я могу сильно разозлиться, когда другие не соглашаются со мной
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q15" value="0">
            <label for="No">Нет</label>
            <input type="radio" name="q15" value="1">
        </div>

        <div class="quest">
            Люди намеренно пытаются разозлить меня
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q16" value="0">
            <label for="No">Нет</label>
            <input type="radio" name="q16" value="1">
        </div>

        <div class="quest">
            Большинство людей ленивы и не будут тяжело работать, если в этом нет необходимости
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q17" value="0">
            <label for="No">Нет</label>
            <input type="radio" name="q17" value="1">
        </div>

        <div class="quest">
            Я часто сначала делаю, а потом думаю
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q18" value="0">
            <label for="No">Нет</label>
            <input type="radio" name="q18" value="1">
        </div>

        <div class="quest">
            Меня злит, когда что-то препятствует моим планам
            <br>
            <label for="Yes">Да</label>
            <input type="radio" checked="checked" name="q19" value="1">
            <label for="No">Нет</label>
            <input type="radio" name="q19" value="0">
        </div>
        <input type="submit">
    </form>

        <?php
            $var = array( array("q"), array("1"));

            for ($i=1; $i<20; $i++) {
                $var[$i][0]=$i;
                $summ=$summ+$_POST[$var[0][0].$var[$i][0]];
            }
            echo "Количество ваших баллов - ".$summ."<br>";

            if ($summ>15) {
                echo "У Вас покладистый характер";
            }

            else if ($summ>8 && $summ<15) {
                echo "Вы не лишены недостатков, но с вами можно ладить";
            }

            else {
                echo "Вашим друзьям можно посочувствовать)";
            }
        ?>
</body>
</html>

