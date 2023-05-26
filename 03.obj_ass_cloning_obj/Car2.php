<?php
//cloning
class Car2
{
    public $color = 'red';
    public $weight;
    public $year;
}

$car = new Car2();

$car2 = clone $car;

var_dump($car,$car2);
var_dump($car === $car2); //will be false
$car3 = $car;
var_dump($car === $car3); //will be true, is the same object

$car2->color = 'white';
var_dump($car, $car2); //not change for $car