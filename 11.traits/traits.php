<?php


trait MyTrait
{
    abstract public function fly();
    public function hello(){
        echo "Hello, i can fly";
    }
}

trait Engine
{
    public function hello()
    {
        echo "I have an engine.";
    }
}
class Plain
{
    use MyTrait, Engine{
        MyTrait::hello insteadof Engine;
        Engine::hello as engineHello;
    }
    public function fly()
    {
        echo "Plain fly";
    }
}

//class Helicopter
//{
//    use MyTrait, Engine;
//
//    public function fly()
//    {
//        echo "Helicopter fly";
//    }
//}

class Car
{
    use Engine;
}

$plain = new Plain();
//$helicopter = new Helicopter();
//$plain->fly();
//$helicopter->fly();
$plain->hello();
$plain->engineHello();