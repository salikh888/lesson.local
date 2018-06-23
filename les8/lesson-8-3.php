<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.06.2018
 * Time: 12:29
 */
header('Content-Type: image/png');
$im = imagecreatetruecolor(500,500);
$color = imagecolorallocate($im, 255, 255, 255);
imagerectangle($im, 500,500, 0, 0, $color);
imagefilledrectangle($im, 500,500, 0, 0, $color);
imagefilledarc($im,250,100,50,50,0,360,imagecolorallocate($im, 50, 50, 255),IMG_ARC_PIE);
imagefilledarc($im,240,95,10,10,0,360,imagecolorallocate($im, 50, 50, 50),IMG_ARC_PIE);
imagefilledarc($im,260,95,10,10,0,360,imagecolorallocate($im, 50, 50, 50),IMG_ARC_PIE);




imagepng($im);
imagedestroy($im);