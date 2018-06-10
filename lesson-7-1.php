<?php
if (isset($_POST['submit'])) {
    if ($_POST['sayt'] === 'Google') {
        header('Location: https://google.ru');
    } elseif ($_POST['sayt'] === 'VK') {
        header('Location: https://vk.com');
    } elseif ($_POST['sayt'] === 'myrusakov') {
        header('Location: https://myrusakov.ru');
    }
}
if (isset($_POST['submit']) && empty($_POST['sayt'])) {
    echo 'Ничено не выбрано';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-4.1.1/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<form class="form form-row p-5" action="lesson-7-1.php" method="post">
    <div class="container bgc">
        <div class="text-center">
            <input class="radio" type="radio" id="check1" name="sayt" value="Google">
            <label for="check1">Google</label>
        </div>
        <div class="text-center">
            <input class="radio" type="radio" id="check2" name="sayt" value="VK">
            <label for="check2">VK</label>
        </div>
        <div class="text-center">
            <input class="radio" type="radio" id="check3" name="sayt" value="myrusakov">
            <label for="check3">myrusakov</label>
        </div>
        <input class="submit btn btn-primary hvr-grow " type="submit" name="submit" value="Перейти">
    </div>
    </div>
</form>
</body>
</html>