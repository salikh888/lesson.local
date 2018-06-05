<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.06.2018
 * Time: 13:07
 */
function AllDir($directory, $space = ' ')
{

    $dir = dir($directory);
    while (($file = $dir->read()) !== false) {
        if ($file == '.' || $file == '..') continue;
        echo $space . $file . '<br>';
        if (is_dir($directory . '/' . $file)) {

            AllDir($directory . '/' . $file, $space . '&nbsp;&nbsp;');

        }
    }
}


//function printDir($folder, $space = '') {
//    $files = scandir($folder);
//    foreach ($files as $file) {
//        if ($file == '.' || $file == '..') continue;
//        $f = $folder.'/'.$file;
//        echo $space.$file.'<br />';
//        if (is_dir($f)) printDir($f, $space.'&nbsp;&nbsp;');
//    }
//}
//echo '<br />';
//
//echo printDir($thisDir);