<?php

$a=true;
echo gettype($a),"<br>";
$a='hello';
echo gettype($a),"<br>";
$a = "hello";
echo gettype($a)."<br>";
$a=12.34;
echo gettype($a)."<br>";
$a=12000;
echo gettype($a)."<br>";
settype($a,"string");
echo gettype($a);
var_dump($a);













?>