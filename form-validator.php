<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.06.2018
 * Time: 18:28
 */
function validateForm($formData)
{
    $errors = [];
    if (!validatemail($formData['from']) && $formData['from'] == null) {
        $errors['from'] = 'Уверены что email введен верно?';
    }
    if (!validatemail($formData['to']) && $formData['to'] == null) {
        $errors['to'] = 'Уверены что email введен верно?';
    }
    if ($formData['subject'] == null) {
        $errors['subject'] = 'Вы не ввели тему';
    }
    return $errors;
}

function validatemail($email)
{
    return preg_match('/^[0-9a-z-\.]+\@[0-9a-z-]{2,}\.[a-z]{2,}$/i/', $email);
}



