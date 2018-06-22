<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.06.2018
 * Time: 12:01
 */
$image = imagecreatefromjpeg('push.jpg');
//Записываем изображение из файла push.jpg в переменную $image
/*
header('Content-Type: image/jpeg');
imageJpeg($image);
//Выводим изображение в браузер
*/
echo imageSX($image).'<br />';
//Получение и вывод ширины изображения
echo imageSY($image).'<br />';
//Получение и вывод высоты изображения