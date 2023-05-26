<?php

class Phone
{
    private $model = 'iPhone';
    private $color = 'red';
    private $price = 3400;

    /**
     * @param string $model
     * @param string $color
     * @param int $price
     */
    public function __construct(string $model, string $color, int $price)
    {
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }


}