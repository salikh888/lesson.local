<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.06.2018
 * Time: 14:13
 *
 *
 */
session_start(); // стартуем сессию (нужно для проверки ввода капчи)s
require_once 'fun.php';

$flack = false;
//echo $flack . ' - тут фолсе';
//echo '<br>';
$im = imagecreatetruecolor(400, 150);
$color = imageColorAllocate($im, 100, 150, 20);
imageSetThickness($im, 3);
imageRectangle($im, 0, 0, 400, 150, $color);
capchamayker($im, $color);
if ($_POST['kapcha'] === $_SESSION['texts']) {
    print ("Капча введена верно.");
} else {
    print ("Капча введена неверно.");
}
//if ($flack == false) {
//    capchamayker($im, $color);
//    $flack = true;
//    echo $flack . ' - тут тру';
//    echo '<br>';
//}
//if (isset($_SESSION['texts'])) {
//    $texts = $_SESSION['texts'];
//    print_r($_SESSION['texts']);
//}
//if (isset($_POST['submit']) && !empty($_POST['bgcolor'])){
//$bgcolor = $_POST['bgcolor'];
//$_SESSION['bgcolor'] = $bgcolor;
//if ($_POST['kapcha'] == $texts) {
//    print ("Капча введена верно.");
//} else {
//    print ("Капча введена неверно.");
//}
$flack = false;
echo $texts;
ob_start();
imagePng($im);
$image = ob_get_contents();
ob_end_clean();

//setcookie('texts', $texts);
//if (isset($_POST['submit'])) {
//    $kapchaArr = $_POST['kapcha'];
//    $texts = $_COOKIE['texts'];
//    print_r($kapchaArr);
//    echo $texts;
//    if ($kapchaArr === $texts) {
//        echo 'правильно';
//        $flack = false;
//    }
//}


//if ($_POST['kapcha'] == $texts) {
//    print ("Капча введена верно.");
//} else {
//    print ("Капча введена неверно.");
//}
//$flack = false;
//echo $texts;

//echo $flack. ' - тут фолсе';
echo '<br>';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="functioncapcha.php">
    <?= '<img src="data:image/png;base64,' . base64_encode($image) . '" />' ?>
    <input type="text" name="kapcha">
    <input type="submit" name="submit">
</body>
</html>
