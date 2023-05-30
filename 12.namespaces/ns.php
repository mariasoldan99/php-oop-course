<?php
namespace php\sub1\sub2\sub3;
class User
{

    public function __construct()
    {
        echo "namespace";
    }
}
class Comment
{

    public function __construct()
    {
        echo "namespace";
    }
}
class Profile
{

    public function __construct()
    {
        echo "namespace";
    }
}

//function hello()
//{
//    echo "hello";
//}
//
//const MY_CONST = 10;

function strlen($str)
{
    echo ' Here i am! ns';
}

\strlen('abcd'); //to access global built-in function

namespace ns1;

class User
{
    public function __construct()
    {
        echo "namespace1";
    }
}

namespace ns2;

class User
{
    public function __construct()
    {
        echo "namespace2";
    }
}