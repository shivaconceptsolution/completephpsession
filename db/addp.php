<?php
include('conn.php');
$email = $_REQUEST['temail'];
$pass = $_REQUEST['tpass'];
$mobile=$_REQUEST['tmobile'];
$fname=$_REQUEST['tfname'];
$age=$_REQUEST['tage'];

$res=mysqli_query($conn,"insert into patient(emailid,pass,mobileno,fname,age) values('$email','$pass','$mobile','$fname','$age')");

if(mysqli_affected_rows($conn)>0)
{
	echo "Data Inserted";
}
echo "<h1>Patient Information</h1>";
$res1 = mysqli_query($conn,"select * from patient");
while($x= mysqli_fetch_array($res1))
{
	echo $x[0]." ".$x[1]." ".$x[2]." ".$x[3]." ".$x[4]."<hr>";
}

?>