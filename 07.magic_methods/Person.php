<?php

class Person
{
    public $name;
    private $phone;

    static $counter = 0;
    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
        echo '__contruct is called'.PHP_EOL;
        self::$counter++;
    }
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
//    public static function __callStatic($name, $arguments)
//    {
//        echo "\"$name\" statis method was called.";
//    }
//
//    public function  __invoke()
//    {
//        echo "Hello from invoke";
//    }
//
//    public function __sleep()
//    {
//        unset($this->phone);
//        return['name'];
//    }

    public function __wakeup()
    {
       // echo 'I am the waking up';
        self::$counter++;
    }

    public function __clone()
    {
        self::$counter++;
       // var_dump($this);
    }

}

$p = new Person('Jane','78876453');
//echo $p->username;
//$p->username = 'Mary';
//echo $p->name;
//echo $p->getMobilePhone().PHP_EOL;
//$p->setMobilePhone('232323','3432423423');
//echo $p->getMobilePhone().PHP_EOL;
//Person::hello();
//var_dump(is_callable($p)); //is true because of function invoke in the class
//echo $p();
//$serialized = serialize($p);
//$newPerson = unserialize($serialized);
//var_dump($newPerson); //they are not the same objects
//var_dump($p);
$newPerson = clone $p; // the clone function is executed just for clone obj
$newPerson2 = unserialize(serialize($p));
var_dump($p, $newPerson, $newPerson2);
echo Person::$counter;