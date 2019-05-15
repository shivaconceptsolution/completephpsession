<?php
function substraction() #Default without return type
{
	$a=1000;
	$b=200;
	$c=$a-$b;
	echo "result is ".$c;
}
function multiplication() #Default with return type
{
	$a=100;
	$b=20;
	$c=$a*$b;
	return  "<br>result is ".$c;
}
function addition($a,$b) #Parametrised without return type
{
	echo "result is ".($a+$b);
}
function division($a,$b) #Parametrised With Return Type
{
	
	$c=$a/$b;
	return $c;
}


substraction();
substraction();
substraction();
substraction();
echo "<br>";
addition(1000,2000);
echo "<br>";
$res=multiplication();
echo "Result is ".$res;

$res1 = division(1000,20);
echo "Result is ".$res1;




?>