<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.06.2018
 * Time: 12:16
 */

class Val  extends Exception

{
private $email;

    public
    static function validEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) && $email = null) {
            throw new Exception('данные пустые');
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('данные некорректные');
        }

    }

    public
    static function validURL($url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return true;
        } elseif (!filter_var($url, FILTER_VALIDATE_URL) && $email = null) {
            throw new Exception('данные пустые');
        } elseif (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new Exception('данные некорректные');
        }

    }
}

?>
