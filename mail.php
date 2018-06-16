<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.06.2018
 * Time: 15:42
 */
//if (empty($_POST['from']) && empty($_POST['to']) && empty($_POST['subject']) && empty($_POST['text'])){
//
//}
//$error = true;
//$from = $_POST['from'];
//$to = $_POST['to'];
//$subject = $_POST['subject'];
//$text = $_POST['text'];
//if (isset($_POST['mail']) ){
//    $from = $_POST['from'];
//    $to = $_POST['to'];
//    $subject = $_POST['subject'];
//    $text = $_POST['textmail'];
//}
//$headers = 'From:' .$from.'\r\n';
//$headers .= 'Reply-to: <admin@mysite.ru>\r\n';
//$headers .= 'Content-type: text/html; charset=utf-8';
//$subject = '=?utf-8?B?'.base64_encode($subject).'?=';
//
//if (mail($to, $subject, $text, $headers)) $error = false;
//?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-4.1.1/dist/css/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <form action="mail.php" method="post" name="mail">
            <div class="form-group">
                <label for="from">
                    От кого:
                </label>
                <input class="form-control" type="email" id="from" name="from">
            </div>
            <div class="form-group">
                <label for="to">
                    Кому:
                </label>
                <input class="form-control" type="email" id="to" name="to">
            </div>
            <div class="form-group">
                <label for="subject">
                    Тема:
                </label>
                <input class="form-control" type="text" id="subject" name="subject">
            </div>
            <div class="form-group">
                <label for="text">
                    Текст письма:
                </label>
                <textarea class="form-control" id="text" name="text"></textarea>
            </div>
            <div class="form-group">
                <input class="form-control" type="submit" name="submit" value="Отправить">
            </div>
        </form>

    </div>
</div>

</body>
</html>
