<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.05.2018
 * Time: 15:13
 */
abstract class Shape
{

    protected $x;
    protected $y;

    public function draw()
    {
        return 'Рисуем точку с координатами '."$this->x".','."$this->y";
    }
}
class Point extends Shape
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}