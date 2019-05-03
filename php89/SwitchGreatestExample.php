<?php

$a=1000;
$b=2000;
$c=300;

switch($a>$b)
{
	 case 1:
      switch($a>$c)
      {
       case 1:
       echo "a is greatest";
       break;
       default:
       echo "c is greatest";
       break;

      }
      break;
      default:
       switch($b>$c)
      {
       case 1:
       echo "b is greatest";
       break;
       default:
       echo "c is greatest";
       break;

      }
      break;



}






?>