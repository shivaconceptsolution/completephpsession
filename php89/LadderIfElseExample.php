<?php
$sal=10000;
if($sal>=0 && $sal<=20000)
	$sal+=500;
else if($sal<=40000)
	$sal+=800;
else
	$sal+=1000;

echo "Salary is $sal";

?>