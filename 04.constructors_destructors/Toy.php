<?php

class Toy
{
    private $color = 'red';
    private $weight = 200;

    public function __construct($color, $weight)
    {
        //echo 'I am here!';
        $this->color = $color;
        $this->weight = $weight;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function __destruct()
    {
       echo 'I am the destroyed: '.$this->color.PHP_EOL;
    }
}


$my_toy = new Toy('white', 150);
$my_toy2 = new Toy('yellow', 230);

echo $my_toy->getColor().PHP_EOL;
echo $my_toy2->getColor().PHP_EOL;

unset($my_toy);
sleep(2);