<?php

class Car
{
    public $color = 'red';
    public $weight;
    public $year;
}

$car = new Car();

$car2 = $car;
//$car->color = 'green'; // will change in both cars
$car = null; // car2 will be exist

var_dump($car2);

// the &
$car3 = & $car; // car3 will be NULL

var_dump($car3);

