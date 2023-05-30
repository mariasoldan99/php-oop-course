<?php
//trait Trait1
//{
//    public function method1()
//    {
//        echo "foo";
//    }
//}
//
//trait Trait2
//{
//    public function method2()
//    {
//        echo "bar";
//    }
//}
//
//trait Trait3
//{
//    use Trait1, Trait2;
//
//    public function method3()
//    {
//        echo "hehe";
//    }
//}
//
//class MyClass
//{
//    use Trais3;
//}
//
//$a =new MyClass();
//$a->method1();

class A {
    public $var1 = 10;
    public function hello()
    {
        echo "Hello from class A";
    }
}

trait TraitA
{
    public function hello()
    {
//        echo "Hello from trait A. " .$this->var1;
        echo "Hello from trait A. ".parent::hello();
    }
}

class B extends A
{
    use TraitA;
}

$a = new B();
$a->hello();