<?php
require_once "../start.php";
/**
 * Created by PhpStorm.
 * User: Салих
 * Date: 21.06.2018
 * Time: 22:42
 */
$mail = 'wqw@sas.rt';
try {
    $email = new ValidClass();
    echo $email->validEmail2($mail);
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