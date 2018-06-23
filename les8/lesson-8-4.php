<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.06.2018
 * Time: 13:13
 * Капча
 */
$im = imagecreatetruecolor(500, 500);

$shouldBeNumber = rand(0,1);

$symbol = $shouldBeNumber ? rand(48,57) : rand(97,122);
$text = chr($symbol);
imageTtfText($im, 15, 0, 100, 300, imagecolorallocate($im, 255, 255, 0), 'fonts/times.ttf', htmlentities($text));
$shouldBeNumber = rand(0,1);
$symbol = $shouldBeNumber ? rand(48,57) : rand(97,122);
$text = chr($symbol);
imageTtfText($im, 15, 0, 125, 300, imagecolorallocate($im, 255, 255, 0), 'fonts/times.ttf', htmlentities($text));
$shouldBeNumber = rand(0,1);
$symbol = $shouldBeNumber ? rand(48,57) : rand(97,122);
$shouldBeNumber = rand(0,1);
$text = chr($symbol);
imageTtfText($im, 15, 0, 150, 300, imagecolorallocate($im, 255, 255, 0), 'fonts/times.ttf', htmlentities($text));
$shouldBeNumber = rand(0,1);
$symbol = $shouldBeNumber ? rand(48,57) : rand(97,122);
$text = chr($symbol);
imageTtfText($im, 15, 0, 175, 300, imagecolorallocate($im, 255, 255, 0), 'fonts/times.ttf', htmlentities($text));
header('Content-Type: image/png');
imagePng($im);
imageDestroy($im);