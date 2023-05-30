<?php
namespace ns2;
use \php\{User, Comment, Profile};
use \DateTime; // is for global namespace, because the DateTime in ns2 is not declared
//use php\User;
//use function php\hello;
//use const php\MY_CONST;
require_once  'ns.php';

//$u = new php\User();
//
//hello();
//echo MY_CONST;

$d = new DateTime(); // or \DateTime()
//$u = new php\sub1\sub2\sub3\User; // error! because is search on ns2

$u = new \php\sub1\sub2\sub3\User; // correct, need a "\"
echo \php\sub1\sub2\sub3\strlen('');

$u1 = new \ns1\User;
