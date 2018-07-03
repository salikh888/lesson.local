<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.07.2018
 * Time: 12:37
 */
function noisemaker($im)
{
    imageSetThickness($im, 2);
    for ($i = 1; $i < 200; $i++) {
        imageSetPixel($im, rand(5, 195), rand(75, 5), imageColorAllocate($im, 8, 24, 89));
    }
    for ($i = 1; $i < 4; $i++) {
        imageline($im, rand(5, 195), rand(60, 20), rand(5, 195), rand(60, 20), imageColorAllocate($im, 240, 240, 240));
    }
    return;
}

function randnumorlet()
{
    $shouldBeNumber = rand(0, 1);
    $symbol = $shouldBeNumber ? rand(48, 57) : rand(97, 122);
    $text = chr($symbol);
    return $text;
}

function xPosition($index)
{
    switch ($index) {
        case 1;
            $x = rand(10, 48);
            break;
        case 2;
            $x = rand(50, 98);
            break;
        case 3;
            $x = rand(100, 158);
            break;
        case 4;
            $x = rand(160, 188);
            break;
    }

    return $x;
}

function randomfont()
{
    $shouldBeNumber = rand(1, 5);
    switch ($shouldBeNumber) {
        case 1;
            $font = 'fonts/arial.ttf';
            break;
        case 2;
            $font = 'fonts/ariali.ttf';
            break;
        case 3;
            $font = 'fonts/arial.ttf';
            break;
        case 4;
            $font = 'fonts/ARIALNBI.TTF';
            break;
        case 5;
            $font = 'fonts/ariblk.TTF';
            break;

    }
    return $font;
}

function kapchaimagemaker($width = 200, $height = 75)
{

    $textarr = [];
    $im = imagecreatetruecolor($width, $height);
    $color = imageColorAllocate($im, 255, 255, 255);

    imagefilledrectangle($im, 0, 0, $width, $height, $color);
    imageSetThickness($im, 5);

    imagerectangle($im, $width, $height, 0, 0, imageColorAllocate($im, 0, 0, 0));
    for ($i = 1; $i <= 4; $i++) {
        $text = randnumorlet();
        $x = xPosition($i);
        $font = randomfont();
        noisemaker($im);
        imageTtfText($im, 30, 0, $x, rand(50, 30), imageColorAllocate($im, 8, 24, 89), $font, $text);
        $textarr[] = $text;

    }
    return [
        'array' => $textarr,
        'image' => $im
    ];
}
