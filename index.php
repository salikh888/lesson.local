<?php

require_once 'start.php';

//$car = new Car();
//echo $car->move();
//echo '<br>';
//$aircraft = new Aircraft();
//echo $aircraft->fly();
//try {
//    $email = 'sadasd@adsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss.ru';
//    $reg = '/[a-z0-9_]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z]*\.)+([a-z]){2,4}/';
//    if (!$email) throw new EmptyException('E-mail не указан', 1);
//    elseif (!preg_match($reg, $email)) throw new InvalidException('E-mail указан не правильно!', 3);
//    elseif (strlen($email) > 40) throw new LongException('Слишков длинный e-mail', 2);
//} catch (Exception $e) {
//    echo '<br />' . $e->getMessage();
//}

//$arr = new Array1();
//foreach ($arr as $k => $v) echo "$k = $v; ";
//echo '<br />';
//
//$a = new Array1();
//$a['Name'] = 'Michael';
//$a['Age'] = 26;
//echo $a['Name'].' - '.$a['Age'].'<br />';
//echo isset($a['Name']).'<br />';
//unset($a['Name']);
//echo isset($a['Name']).'<br />';
//$arr = new Array1();
//foreach ($arr as $k => $v) echo "$k = $v; ";
//echo '<br />';

//$i = 0;
$thisDir = 'D:\Pictures';
//$dir = dir($thisDir);
//
//while (($file = $dir->read()) !== false) {
//    if (is_file($thisDir . '/' . $file)) {
//        echo $file . ' - Файл' . '<br>';
//    } else {
//        echo $file . ' - Нефайл' . '<br>';
//    }
//}

//$dir = scandir($thisDir);
//print_r($dir);
//foreach ($dir as $file){
//    if(is_file($file)){
//        echo $file . ' - Файл' . '<br>';
//    }else foreach (scandir($file) as  $file2)
//        echo $file2 . ' - Файл' . '<br>';
//
//}

mkdir('new dir');
rmdir('new dir');

$arr = glob('*.php');
print_r($arr);

function printDir($folder, $space = '') {
    $files = scandir($folder);
    foreach ($files as $file) {
        if ($file == '.' || $file == '..') continue;
        $f = $folder.'/'.$file;
        echo $space.$file.'<br />';
        if (is_dir($f)) printDir($f, $space.'&nbsp;&nbsp;');
    }
}
echo '<br />';

echo printDir($thisDir);