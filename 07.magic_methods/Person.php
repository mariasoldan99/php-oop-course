<?php

class Person
{
    public $name = 'John';
    private $phone = 123456;

//    public function __construct()
//    {
//        echo '__contruct is called'.PHP_EOL;
//    }
//
//    public function __destruct()
//    {
//        echo '__destruct is called'.PHP_EOL;
//    }
//
//    public function __toString()
//    {
//        return "Name: $this->name. Phone: $this->phone".PHP_EOL;
//    }

//    public function __get($propName)
//    {
//       if ($propName === 'username')
//       {
//           return $this->name.PHP_EOL;
//       }
//       return "Property \"$propName\" does not exist!".PHP_EOL;
//    }

//    public function __set($propName, $value)
//    {
//    //var_dump($propName, $value);
//        if($propName === 'username'){
//            $this->name = $value.PHP_EOL;
//        }
//    }
//
//    public function __call($name, $arguments)
//    {
//      if($name === 'getMobilePhone')
//      {
//          return $this->getPhone();
//      }elseif($name === 'setMobilePhone')
//      {
//          return call_user_func_array([$this, 'setPhone'], $arguments);
//      }
//    }
//
//    public function getPhone()
//    {
//        return $this->phone;
//    }
//
//    public function setPhone($phone)
//    {
//        $this->phone = $phone;
//    }
    public static function __callStatic($name, $arguments)
    {

    }

}

$p = new Person();
//echo $p->username;
//$p->username = 'Mary';
//echo $p->name;
echo $p->getMobilePhone().PHP_EOL;
$p->setMobilePhone('232323','3432423423');
echo $p->getMobilePhone().PHP_EOL;