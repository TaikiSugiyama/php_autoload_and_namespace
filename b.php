<?php
namespace bbb;

require_once('./a.php');
//use aaa\A;

//$a = new \aaa\A();
$a = new \aaa\A();

echo $a->getMessage() . PHP_EOL;
