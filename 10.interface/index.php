<?php

interface MyInterface
{
    public function method1();
    public function method2();
}
interface MyInterface2 extends MyInterface
{
    public function method2();
}

class MyClass implements MyInterface2
{

    public function method1()
    {
        // TODO: Implement method1() method.
    }

    public function method2()
    {
        // TODO: Implement method2() method.
    }
}


//echo MyInterface::MY_CONST;
$myClass = new MyClass();