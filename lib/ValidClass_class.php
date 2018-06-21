<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.06.2018
 * Time: 12:16
 */

class ValidClass
{
    private $email;
    private $url;

    public
    static function validEmail2($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } elseif ($email == null) {
            throw new Exception('данные пустые');
            return;
        } else {
            throw new Exception('данные некорректные');
            return;
        }

    }

    public
    static function validURL($url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return true;
        } elseif ($url == null) {
            throw new Exception('данные пустые');
            return;
        } elseif (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new Exception('данные некорректные');
            return;
        }

    }
}

?>
