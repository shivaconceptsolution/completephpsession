<?php

$x = array(array(2,3,4),array(4,5,6,7),array(4,5,6),array(1,1,1,7));
for($i=0;$i<count($x);$i++)
{
    for($j=0;$j<count($x[$i]);$j++)
    {
    	echo $x[$i][$j]." ";
    }
    echo "<br>";

}






?>