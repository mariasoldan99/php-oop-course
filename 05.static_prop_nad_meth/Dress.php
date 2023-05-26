<?php

class Dress
{
    public $color = 'yellow';
    private $length = 60;
    static public $availableColors = [
        'red', 'green', 'yellow', 'blue', 'white'
    ];

    static $counter = 0;
    public $mycounter = 0;
    public function __construct()
    {
        $this->mycounter++;
        self::$counter++;
    }

    public static function getAvailableColors()
    {
        return self::$availableColors;
    }

}

$my_dress = new Dress();
echo Dress::$counter.' '.$my_dress->mycounter.PHP_EOL;

$my_dress2 = new Dress();
echo Dress::$counter.' '.$my_dress2->mycounter.PHP_EOL;

Dress::getAvailableColors();