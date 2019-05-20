<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
<input type="checkbox" name="chk[]" value="C" />C
<br>
<input type="checkbox" name="chk[]" value="CPP" />CPP
<br>
<input type="checkbox" name="chk[]" value="PHP" />PHP
<br>
<input type="checkbox" name="chk[]" value="DESIGN" />DESIGN
<br>
<input type="submit" name="btnsubmit" value="Click" />
<br>
</form>
<?php
if(isset($_POST['btnsubmit']))
{
  $course = $_POST['chk'];
 // print_r($course);
  $c="";
  foreach ($course as $key) {
  	$c.=$key." ";
  }
  echo $c;

}



?>
</body>
</html>