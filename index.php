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
<?php
    $now = date("H");
    if ($now>8 and $now<20) {
       echo '<img src="img/day.jpg" alt="">';
    }
    else {
        echo '<img src="img/night.jpg" alt="">';
    }
?>
    <div class="container">
        <?php
        $name = "Пронин Алексей Евгеньевич";
        $Age = 21;
        echo $name.'<br>';
        echo $Age.'<br>';



        const Constant = "Это константа";
        echo Constant;
        ?>
    </div>

</body>
</html>

