<?php
session_start();
if (isset($_SESSION['bgcolor'])) {
    $bgcolor = $_SESSION['bgcolor'];
} else $bgcolor = '#fff';
if (isset($_POST['submit']) && !empty($_POST['bgcolor'])){
    $bgcolor = $_POST['bgcolor'];
    $_SESSION['bgcolor'] = $bgcolor;
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
<form class="form form-row p-md-5" action="index.php" method="post">
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
