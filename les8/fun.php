<?php
/**
 * Created by PhpStorm.
 * User: Салих
 * Date: 24.06.2018
 * Time: 17:41
 */
session_start(); // стартуем сессию (нужно для проверки ввода капчи)
function randnumorlet()
{
    $shouldBeNumber = rand(0, 1);
    $symbol = $shouldBeNumber ? rand(48, 57) : rand(97, 122);
    $text = chr($symbol);
    return $text;
}

function capchamayker($im, $color)
{

    $x = '';
    $texts = '';

    for ($i = 1; $i <= 4; $i++) {
        $text = randnumorlet();
        $texts .= $text;
        $_SESSION['texts'] = $texts;
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


    }
    return $_SESSION['texts'];
}

?>