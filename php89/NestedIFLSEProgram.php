<?php
$dept='HR';
$sal=12000;
if($dept=='IT')
{
    if($sal>10000)
    	$sal+=500;
    else
    	$sal+=200;
}
else
{
    if($sal>10000)
    	$sal+=1000;
    else
    	$sal+=500;

}

echo "Salary of ".$dept. " is =".$sal;