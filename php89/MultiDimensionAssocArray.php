<?php
$student = Array(
array("rno"=>1001,"sname"=>"Abc"),
array("rno"=>1002,"sname"=>"xyz"),
array("rno"=>1003,"sname"=>"manish kumar")
);

foreach($student as $s)
{
	foreach($s as $key=>$value)
	{
	echo "Key is $key and Value is $value ";
    }
    echo "<br>";

}





?>