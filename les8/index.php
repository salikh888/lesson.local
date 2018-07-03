<?php
/**
 * Created by PhpStorm.
 * User: User
* Date: 03.07.2018
* Time: 10:02
*/

/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.06.2018
 * Time: 14:13
 *
 *
 */
require_once 'noisemaker.php';
session_start();

function randnumorlet()
{
    $shouldBeNumber = rand(0, 1);
    $symbol = $shouldBeNumber ? rand(48, 57) : rand(97, 122);
    $text = chr($symbol);
    return $text;
}

$widht = 200;
$heiqht = 75;

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
            $x = rand(10, 48);
            break;
        case $i == 2;
            $x = rand(50, 98);
            break;
        case $i == 3;
            $x = rand(100, 158);
            break;
        case $i == 4;
            $x = rand(160, 188);
            break;

    }
    noisemaker($im);
    imageTtfText($im, 30, 0, $x, rand(60, 20), imageColorAllocate($im, 8, 24, 89), 'fonts/times.ttf', $text);
    $textarr[] = $text;

}



if (empty($_SESSION['textarr'])) {
    $_SESSION['textarr'] = $textarr;
}

$kapcha = false;
ob_start();
imagePng($im);
$image = ob_get_contents();
ob_end_clean();
$kapchaArr = $_POST['kapcha'];
$kapchaArr = str_split($kapchaArr);

if (isset($_POST['submit']) && empty($_POST['kapcha']) || $kapchaArr != $_SESSION['textarr']) {
    $_SESSION['textarr'] = $textarr;
}

if (isset($_POST['submit'])) {

    if ($kapchaArr == $_SESSION['textarr']) {
        $kapcha = true;
    }

}

print_r($_SESSION['textarr']);
echo '<br>';
print_r($kapchaArr);
?>
<?php if ($kapcha) { ?>
    <?php unset($_SESSION['textarr']); ?>
<?php } else  { ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-4.1.1/dist/css/bootstrap.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container h-100">
    <div class="row justify-content-center">
        <div class="col-4">
            <form class="form-control-range row align-items-center d-flex" style="height: 600px" method="post"
                  action="index.php">

                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <?= '<img src="data:image/png;base64,' . base64_encode($image) . '" />' ?>
                    </div>

                    <div class="col-12 p-2 d-flex justify-content-center">
                        <div class="form-group form-inline">
                            <input class="form-control" style="width: 100px" maxlength="4" type="text" name="kapcha">
                            <button class="btn btn-secondary" name="submit">Отправить</button>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="form-group form-inline">
                            <?php if ($kapcha) { ?>
                                <p>Вы не робот</p>
                                <a href='index.php?f=logout'>Назад</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>
