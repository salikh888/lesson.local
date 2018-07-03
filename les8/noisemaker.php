<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.07.2018
 * Time: 12:23
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