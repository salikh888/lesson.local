<?php
require_once "../start.php";
/**
 * Created by PhpStorm.
 * User: Салих
 * Date: 21.06.2018
 * Time: 22:42
 */
$mail = 'wqw@sas.rt';
$url = 'wqwsas.rt';
try {
    echo ValidClass::validEmail2($mail);
} catch (Exception $e) {
    echo $e->getMessage();
}
echo '<br>';
try {
    echo ValidClass::validURL($url);
} catch (Exception $e) {
    echo $e->getMessage();
}