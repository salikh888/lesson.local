<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.06.2018
 * Time: 14:33
 */
require_once 'start.php';

require_once 'form-validator.php';
$error = true;
if (isset($_FILES['file'])) {
    $fileName = $_FILES['file']['name'];

    $uploadDir = 'files/';
    $fileNameWithPath = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $fileNameWithPath)) {

        unlink($_FILES['file']['tmp_name']);
    }
}
$submitted = $_POST['submit'];
$from = trim(mb_strtolower($_POST['from']));
$to = trim(mb_strtolower($_POST['to']));
$subject = trim($_POST['subject']);
$text = $_POST['text'];
$file = $_FILES['file']['tmp_name'];
$formData = [
    'from' => null,
    'to' => null,
    'subject' => null,
    'text' => null,
    'file' => null
];
$formErrors = [
    'from' => null,
    'to' => null,
    'subject' => null,
    'text' => null,
    'file' => null
];

if ($submitted) {
    $formData = [
        'from' => $from,
        'to' => $to,
        'subject' => $subject,
        'text' => $text,
        'file' => $fileNameWithPath
    ];

    $mail = new PHPMailer();
    $mail->CharSet = 'utf-8';
    $mail->setFrom($formData['from']);
    $mail->addAddress($formData['to']);
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addAttachment($formData['file']);
    $mail->isHTML(true);
    $mail->Subject = $formData['subject'];
    $mail->Body = $formData['text'];
    $mail->AltBody = $formData['text'];
    $formErrors = validateForm($formData);
    $noErrors = count($formErrors) === 0;
    if ($noErrors) {
        if ($mail->send()) {
            $error = false;;
        }
    }
    unlink($formData['file']);
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
        <form class="form-control-range" action="lesson-7-7.php" enctype="multipart/form-data" method="post"
              name="mail">
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
            <div class="form-group">
                <label for="exampleFormControlFile1">Выберите файл</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
            </div>
            <button class="col-2 btn btn-primary " name="submit" value="submit">Отправить</button>
        </form>
        <?php if ($error == false) { ?>
            <p>Письмо отправлено!</p>
        <?php } ?>
    </div>
</div>
</body>
</html>