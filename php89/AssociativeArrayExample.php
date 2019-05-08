<?php
$s = array("rno"=>1001,"sname"=>"manish kumar","branch"=>"CS","fees"=>25000);


	echo "Rollno is ".$s["rno"]." Name is ".$s["sname"]." Branch is ".$s["branch"]." Fees is ".$s["fees"]."<hr>";

	foreach ($s as $s1) {
		echo $s1." ";
	}

	echo "<br>Display Data Using Key=>Value Pair<br>";
	foreach ($s as $k=>$v) {
		echo "key is $k and value is $v "."<hr>";
	}


?>