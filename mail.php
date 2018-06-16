<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.06.2018
 * Time: 15:42
 */
require_once 'form-validator.php';
$error = true;
$submitted = $_POST['submit'];
$from = trim($_POST['from']);
$to = trim($_POST['to']);
$subject = trim($_POST['subject']);
$text = $_POST['text'];
$formData = [
    'from' => null,
    'to' => null,
    'subject' => null,
    'text' => null
];
$formErrors = [
    'from' => null,
    'to' => null,
    'subject' => null,
    'text' => null
];

if ($submitted) {
    $formData = [
        'from' => $from,
        'to' => $to,
        'subject' => $subject,
        'text' => $text
    ];
}

$formErrors = validateForm($formData);
$noErrors = count($formErrors) === 0;
if ($noErrors) {

    $headers = 'From:' . $formData['from'] . '\r\n';
    $headers .= 'Reply-to: <admin@mysite.ru>\r\n';
    $headers .= 'Content-type: text/html; charset=utf-8';
    $subject = '=?utf-8?B?' . base64_encode($formData['subject']) . '?=';

    if (mail($formData['to'], $subject, $formData['text'], $headers)) $error = false;
}

?>

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
    <div class="row h-100  justify-content-center align-items-center">
        <form class="form-control-range" action="mail.php" method="post" name="mail">
            <div class="form-group">
                <label for="from">
                    От кого:
                </label>
                <input class="form-control" type="email" id="from" name="from">
                <?php if ($formErrors['from']): ?>
                    <span><?= $formErrors['from'] ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="to">
                    Кому:
                </label>
                <input class="form-control" type="email" id="to" name="to">
                <?php if ($formErrors['to']): ?>
                    <span><?= $formErrors['to'] ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="subject">
                    Тема:
                </label>
                <input class="form-control" type="text" id="subject" name="subject">
                <?php if ($formErrors['subject']): ?>
                    <span><?= $formErrors['subject'] ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="text">
                    Текст письма:
                </label>
                <textarea class="form-control" id="text" name="text" rows="10"></textarea>
            </div>
            <button class="col-2 btn btn-primary " name="submit" value="submit">Отправить</button>
        </form>
        <?php if ($error == false) { ?>
            <p>Письмо отправлено!</p>
        <?php } else { ?>
            <p>Что то пошло не так</p>
        <?php } ?>
    </div>
</div>
</body>
</html>
