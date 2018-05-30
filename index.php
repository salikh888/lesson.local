<?php

require_once 'start.php';

$car = new Car();
echo $car->move();
echo '<br>';
$aircraft = new Aircraft();
echo $aircraft->fly();
try {
    $email = 'sadasd@adsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss.ru';
    $reg = '/[a-z0-9_]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z]*\.)+([a-z]){2,4}/';
    if (!$email) throw new EmptyException('E-mail не указан', 1);
    elseif (!preg_match($reg, $email)) throw new InvalidException('E-mail указан не правильно!', 3);
    elseif (strlen($email) > 40) throw new LongException('Слишков длинный e-mail', 2);
} catch (Exception $e) {
    echo '<br />' . $e->getMessage();
}