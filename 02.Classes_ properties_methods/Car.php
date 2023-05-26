<?php

class Car
{
    private $color;
    public $weight;
    private $year;
    private $availableColors = [
        'red', 'green', 'blue', 'white'
    ];

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setColor($color)
    {
        if(in_array($color, $this->availableColors))
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$my_car = new Car();
$my_car->setColor('red');
echo $my_car->getColor();

$year = $my_car->setYear(2010);
echo $my_car->getYear();
