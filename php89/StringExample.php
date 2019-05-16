<?php

$s = "welcome";
$c=0;
$v=0;
for($i=0;$i<strlen($s);$i++)
{

   if($s[$i]=='a' || $s[$i]=='e' || $s[$i]=='i' || $s[$i]=='o' || $s[$i]=='u')
   	$v++;
   else
   	$c++;

}

echo "Total vowel is $v and Consonent is $c"."<br>";

 ?>