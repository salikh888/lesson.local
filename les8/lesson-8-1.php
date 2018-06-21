<?php
require_once "../start.php";
/**
 * Created by PhpStorm.
 * User: Салих
 * Date: 21.06.2018
 * Time: 22:42
 */
try {
    $email = new ValidClass();
    echo $email->validEmail2('wqw@sas.rt');
} catch (Exception $e) {
    echo $e->getMessage();
}
echo '<br>';
try {
    $url = new ValidClass();
    echo $url->validURL('');
} catch (Exception $e) {
    echo $e->getMessage();
}