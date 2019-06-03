<?php
include('conn.php');
$email = $_REQUEST['temail'];
$mobile=$_REQUEST['tmobile'];
$fname=$_REQUEST['tfname'];
$age=$_REQUEST['tage'];

$res=mysqli_query($conn,"delete from patient  where emailid='$email'");

if(mysqli_affected_rows($conn)>0)
{
	header('location:EditDeleteRecord.php');
}


?>