<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.06.2018
 * Time: 15:03
 */


//$colors = ['green' => '#090', 'blue' => '#009', 'red' => '#900'];
//$bgcolor = '#fff'; // Цвет фона по умолчанию (белый)
//
////--Проверяем, есть ли уже сохраненный в куки bgcolor (также проверяем на корректность, т.к. куки легко подменить)
//if ( isset($_COOKIE['bgcolor']) && in_array($_COOKIE['bgcolor'], $colors) )
//{
//    //--Если есть, используем сохраненное значение
//    $bgcolor = $_COOKIE['bgcolor'];
//}
//
////--Проверяем, был ли передан GET-параметр bgcolor и имеется ли он в нашем массиве. А то, знаете ли, могут передать мало ли чего, а нам потом расхлебывать ;)
//if ( isset($_GET['bgcolor']) && in_array($_GET['bgcolor'], $colors) )
//{
//    $bgcolor = $_GET['bgcolor']; //--Это будет наш новый фон для страницы
//    setcookie('bgcolor', $bgcolor); //--Сохраняем значение цвета фона в куки
//}


//$bgcolor = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : '#fff';
//if (isset($_POST['submit']) && in_array($_POST['bgcolor'], ['red', 'green', 'blue'])) {
//    $bgcolor = $_POST['bgcolor'];
//    setcookie('bgcolor', $bgcolor);
//}
if (isset($_COOKIE['bgcolor'])) {
    $bgcolor = $_COOKIE['bgcolor'];
} else $bgcolor = '#fff';
if (isset($_POST['submit']) && !empty($_POST['bgcolor'])){
    $bgcolor = $_POST['bgcolor'];
    setcookie('bgcolor', $bgcolor);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css">
        body{
            background-color: <?= "$bgcolor";?>;
        }
    </style>
    <title>Document</title>
</head>
<body>
<form class="form form-row p-md-5" action="lesson-7-2.php" method="post">
    <div class="container bgc">
        <div class="">
            <input class="radio" type="radio" id="check1" name="bgcolor" value="red"
<!--            --><?php //if ($bgcolor === "red"): ?><!--checked="checked"--><?php //endif; ?><!-->-->
            <label for="check1">Красный</label>
        </div>
        <div class="">
            <input class="radio" type="radio" id="check2" name="bgcolor" value="green"
<!--            --><?php //if ($bgcolor === "green"): ?><!--checked="checked"--><?php //endif; ?><!-->-->
            <label for="check2">Зелёный</label>
        </div>
        <div class="">
            <input class="radio" type="radio" id="check3" name="bgcolor" value="blue"
<!--            --><?php //if ($bgcolor === "blue"): ?><!--checked="checked"--><?php //endif; ?><!-->-->
            <label for="check3">Синий</label>
        </div>
        <input class="submit btn btn-primary hvr-grow" type="submit" name="submit" value="Перекрасить">
    </div>
    </div>
</form>
</body>
</html>

