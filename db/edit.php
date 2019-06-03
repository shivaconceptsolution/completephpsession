<?php
include('conn.php');
$email = $_REQUEST['temail'];
$pass = $_REQUEST['tpass'];
$mobile=$_REQUEST['tmobile'];
$fname=$_REQUEST['tfname'];
$age=$_REQUEST['tage'];

$res=mysqli_query($conn,"update patient set mobileno='$mobile',pass='$pass',fname='$fname',age='$age' where emailid='$email'");

if(mysqli_affected_rows($conn)>0)
{
	header('location:EditDeleteRecord.php');
}


?>