<?php
    $style = parse_ini_file("config.ini",true);

//    print_r($style);
    foreach ($style as $value => $key) {
        foreach ($key as $v => $k) {
            echo $value . '{' . $v . ':' . $k . '}';
        }
    }
//    $en = parse_ini_file('en.ini', true);
//    $ru = parse_ini_file('ru.ini', true);
//
//    $e =  $en['config']['TITLE'];
//    $r =  $ru['config']['TITLE'];
//
//    print_r($_SERVER);
//    foreach ($_SERVER as $vol => $key_s){
//        echo $vol."=".$key_s.'<br>';
//        if ([HTTP_ACCEPT_LANGUAGE] => ru-RU,ru;q < en-US;q)
//
//
//    }

