<?php
$arr = array(12,23,34,45,67,11);
echo "MAX:".max($arr)."<br>";
echo "MIN:".min($arr)."<br>";
echo "SUM:".array_sum($arr)."<br>";
print_r($arr);
sort($arr);
echo "<br>Sorted Array is <br>";
print_r($arr);
echo "<br>Reverse of Sorted Array is <br>";
rsort($arr);
print_r($arr);

$x = array();

if(is_array($x))
	echo "Array Type Variable";
else
	echo "Normal Variable";
$key = array("rno","sname","branch","fees");
$value = array(1001,"xyz","CS",45000);
$xarr = array_combine($key, $value);
echo "<br>";
print_r($xarr);


$a = array(1,2,3,4,5);
$b = array(6,7,8,9,1,2);

$res = array_merge($a,$b);
echo "<br>";
print_r($res);
$c = array(1,1,2,3,3,4,5,1,2,7);
echo "<br>";
$res1 = array_unique($c);
print_r($res1);

$res2 = array_intersect($a,$b);
print_r($res2);
echo "<br>";
$res3 = array_diff($a,$b);
print_r($res3);
echo "<br>";

$m = array(12,23,34,45,56,11,34,1);
//$res4 = array_splice($m, 2);
//$res4 = array_slice($m, 2,4,-1);
 array_push($m, "4512");
echo "<br>";

print_r($m);









?>