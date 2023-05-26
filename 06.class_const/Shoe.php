<?php

class Shoe
{
    public $color;
    public $brand;

    const BRAND_ADIDAS = 'adidas';
    const BRAND_NIKE = 'nike';
    const BRAND_PUMA = 'puma';

    const COLOR_RED = 'red';
    const COLOR_YELLOW = 'yellow';
    const COLOR_BLUE = 'blue';
    /**
 * @param $color
 * @param $brand
 */
    public function __construct($color, $brand)
    {
        $this->color = $color;
        $this->brand = $brand;
    }
}

$myShoe = new Shoe(Shoe::COLOR_BLUE, Shoe::BRAND_NIKE);
var_dump($myShoe);


