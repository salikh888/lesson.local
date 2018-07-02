<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.06.2018
 * Time: 14:13
 *
 *
 */
session_start();
function randnumorlet()
{
    $shouldBeNumber = rand(0, 1);
    $symbol = $shouldBeNumber ? rand(48, 57) : rand(97, 122);
    $text = chr($symbol);
    return $text;
}

$widht = 400;
$heiqht = 150;

$im = '';
$x = '';
$textarr = [];
$im = imagecreatetruecolor($widht, $heiqht);
$color = imageColorAllocate($im, 255, 255, 255);

imagefilledrectangle($im, 0, 0, $widht, $heiqht, $color);
imageSetThickness($im, 5);

imagerectangle($im, $widht, $heiqht, 0, 0, imageColorAllocate($im, 0, 0, 0));
for ($i = 1; $i <= 4; $i++) {
    $text = randnumorlet();

    switch ($i) {
        case $i == 1;
            $x = rand(10, 90);
            break;
        case $i == 2;
            $x = rand(110, 200);
            break;
        case $i == 3;
            $x = rand(210, 300);
            break;
        case $i == 4;
            $x = rand(310, 390);
            break;

    }

    imageSetPixel($im, rand(10, 390), rand(10, 140), imageColorAllocate($im, 8, 24, 89));
    imageTtfText($im, 30, 0, $x, rand(30, 100), imageColorAllocate($im, 8, 24, 89), 'fonts/times.ttf', $text);
    $textarr[] = $text;

}

if (empty($_SESSION['textarr'])) {
    $_SESSION['textarr'] = $textarr;
}

ob_start();
imagePng($im);
$image = ob_get_contents();
ob_end_clean();
if (isset($_POST['submit']) && empty($_POST['kapcha'])) {
    unset($_SESSION['textarr']);
}
if (isset($_POST['submit'])) {
    $kapchaArr = $_POST['kapcha'];
    $kapchaArr = str_split($kapchaArr);
    print_r($kapchaArr);
    echo '<br>';
    print_r($_SESSION['textarr']);
    if ($kapchaArr == $_SESSION['textarr']) {
        $kapcha = true;
    }

}

?>

<?php if ($kapcha) { ?>
    <?php unset($_SESSION['textarr']); ?>
    <p>Вы не робот</p>
    <a href='functioncapcha.php?f=logout'>Выход</a>
<?php } else  { ?>
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
    <?php } ?>
</body>
</html>
