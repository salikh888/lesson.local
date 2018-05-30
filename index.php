<?php

require_once 'start.php';

$car = new Car();
echo $car->move();
echo '<br>';
$aircraft = new Aircraft();
echo $aircraft->fly();



