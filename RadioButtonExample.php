<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style type="text/css">
    	input[type="text"]
    	{
            width:300px;
            background-color: red;
            height: 30px;
            border-radius: 10px;

    	}

       input[type="submit"]
       {
       	width: 200px;
       	background-color: gray;
       	height: 30px;
            border-radius: 10px;
       }

    </style>	
</head>
<body>
	<center>
<form action="" method="get">
  <input type="radio" name="r" value="+" />ADDITION
  <br>
  <input type="radio" name="r" value="-" />SUBSTRACTION
  <br>
  Enter first number
  <br>
  <input type="text" name="txtnum1" />
  <br>
  Enter second number
  <br>
  <input type="text" name="txtnum2" />
  <br>
  <input type="submit" name="btnsubmit" value="Click"/>

   

</form>


<?php
if(isset($_GET['btnsubmit']))
{

$op = $_GET['r'];

 $a = $_GET['txtnum1'];
$b = $_GET['txtnum2'];
if($op=="+")
$c =$a+$b;
else
$c=$a-$b;
echo "Result is $c";

}



?>
</center>
</body>
</html>