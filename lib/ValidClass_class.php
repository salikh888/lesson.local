<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.06.2018
 * Time: 12:16
 */

class ValidClass
{
    public
    static function validEmail2($email)
    {
        if ($email == null) {
            throw new Exception('данные пустые');
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('данные некорректные');
        } else {
            return true;
        }

    }

    public
    static function validURL($url)
    {
        if ($url == null) {
            throw new Exception('данные пустые');
        } elseif (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new Exception('данные некорректные');
        } else {
            return true;
        }

    }
}

