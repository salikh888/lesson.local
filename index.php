<?php

//include 'point.php';
//
//$point = new Point(5,3);
//print_r($point);
//echo '<br>';
//echo $point->draw();

trait СanMove{
    public function move(){
        return 'Движение автомобиля';
    }
}

trait СanFly{
    public function fly(){
        return 'Полёт самолёта';
    }
}

class Car  {
    use СanMove;
}

class Aircraft  {
    use СanFly;
}



$car = new Car();
echo $car->move();


$aircraft = new Aircraft();
echo $aircraft->fly();





