<?php

class ParentClass
{
    public $property1 = '1';
    protected $property2 = '2';
    private $property3 = '3';
    protected const CONST = 'MY_CONSTANT';

    public function getProperty2()
    {
        return $this->property2;
       // return var_dump($this);
    }
}

class ChildClass extends ParentClass
{
    public $property1 = '11';
    protected $property2 = '22';
    public static function getConst()
    {
        return self::CONST;
    }
//    public function getProperty2()
//    {
//        $result = parent::getProperty2(); // TODO: Change the autogenerated stub
//       return $result;
//    }
}

$obj = new ChildClass();
//echo $obj->getProperty2();

echo ChildClass::getConst();