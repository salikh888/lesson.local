<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.06.2018
 * Time: 13:44
 */
$url ='http://lesson1.local/?page=1&ref=partner';
echo $url.'<br>';
$arr = parse_url($url);
print_r($arr);
echo '<br />';
parse_str($arr['query'], $query);
print_r($query);
echo '<br />';
$ref = $query['ref'];
echo $ref.'<br />';
setcookie('ref', $query['ref']);
echo $ref.'<br />';
print_r ($_COOKIE['ref']);
unset($query['ref']);
print_r($query);
echo '<br />';
$query = http_build_query($query);
echo 'Тут нет ref ' .$query.'<br />';
$url = $arr['scheme'].'://'.$arr['host'].$arr['path'].'?'.$query;
echo $url.'<br />';
header("$url");
print_r($_COOKIE['ref']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-4.1.1/dist/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?= $_COOKIE['ref'];?>
</body>
</html>



