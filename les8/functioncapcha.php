<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.06.2018
 * Time: 14:13
 *
 *
 */
function randnumorlet()
{
    $shouldBeNumber = rand(0, 1);
    $symbol = $shouldBeNumber ? rand(48, 57) : rand(97, 122);
    $text = chr($symbol);
    return $text;
}

$im = '';
$x = '';
$textarr = [];
$im = imagecreatetruecolor(400, 150);
$color = imageColorAllocate($im, 100, 150, 20);
imageSetThickness($im, 3);
imageRectangle($im, 0, 0, 400, 150, $color);
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
    imageSetPixel($im, 400, 150, $color);

    imageTtfText($im, 30, 0, $x, rand(30, 100), imagecolorallocate($im, 255, 255, 0), 'fonts/times.ttf', $text);
    $textarr[] = $text;
}
ob_start();
//header('Content-Type: image/png');
imagePng($im);
//imageDestroy($im);
$image = ob_get_contents();
ob_end_clean();
echo '<img src="data:image/png;base64,'.base64_encode($image).'" />';
if($_POST['submit']){
    $kapchaArr = str_split($_POST['kapcha'],4);
    if ($kapchaArr == $textarr){
        echo 'правильно';
    }
}
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
<form method="post">
    <input form="" type="text" name="kapcha">
    <input type="submit">
</body>
</html>
