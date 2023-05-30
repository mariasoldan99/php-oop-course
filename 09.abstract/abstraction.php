<?php

abstract class Shape
{
    public $color;

    abstract public function getArea(): string;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}


class Circle extends  Shape
{
    public $radius;

    public function __construct($color, $radius)
    {
       parent::__construct($color);
        $this->radius = $radius;
    }
    public function getArea(): string
    {
        $area = $this->radius * $this->radius * 3.14;
       return "Circle: $area";
    }
}

class Rectangle extends  Shape
{
    public $width;
    public $length;

    public function __construct($color, $width, $length)
    {
        parent::__construct($color);
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea(): string
    {
        $area = $this->width * $this->length;
        return "Rectangle: $area";
    }
}

$c = new Circle('red', 2);
$r = new Rectangle('blue', 4,5);
echo $c->getArea().PHP_EOL;
echo $r->getArea().PHP_EOL;