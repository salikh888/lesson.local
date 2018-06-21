<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.06.2018
 * Time: 13:44
 */
require_once "start.php";
$mail = Valid();
echo $mail->validEmail('qwweasd.ru');



//$url ='http://lesson1.local/?page=1&ref=partner';
//echo $url.'<br>';
//$arr = parse_url($url);
//print_r($arr);
//echo '<br />';
//parse_str($arr['query'], $query);
//print_r($query);
//echo '<br />';
//$ref = $query['ref'];
//echo $ref.'<br />';
//setcookie('ref', $query['ref']);
//echo $ref.'<br />';
//print_r ($_COOKIE['ref']);
//unset($query['ref']);
//print_r($query);
//echo '<br />';
//$query = http_build_query($query);
//echo 'Тут нет ref ' .$query.'<br />';
//$url = $arr['scheme'].'://'.$arr['host'].$arr['path'].'?'.$query;
//echo $url.'<br />';
//header("$url");
//print_r($_COOKIE['ref']);
if (isset($_FILES['file'])) {
    $fileName = $_FILES['file']['name'];
    echo $fileName;
    echo 'Файл: ' . $fileName . '<br>';

//Загрузка файла на сервер
    $uploadDir = 'files/'; //Директория на сервере, для загружаемых файлов
    echo $_FILES['file']['tmp_name'];
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir . $fileName)) {
        echo 'Файл успешно загружен на сервер.<br>';
    } else {
        echo 'Загрузка файла не удалась!<br>';
    }
}
?>


<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <link rel="stylesheet" href="bootstrap-4.1.1/dist/css/bootstrap.css">-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<?//= $_COOKIE['ref']; ?>
<!---->
<!--<form action="index.php" enctype="multipart/form-data" method="post">-->
<!--    Файл: <input type="file" name="file">-->
<!--    <input type="submit" name="submintbut" value="Отправить">-->
<!--</form>-->
<!--</body>-->
<!--</html>-->



