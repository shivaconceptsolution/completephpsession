<?php
include('conn.php');
session_start();
$email = $_REQUEST['temail'];
$pass = $_REQUEST['tpass'];

$res1 = mysqli_query($conn,"select * from patient where emailid='$email' and pass='$pass'") or die(mysqli_error($conn));

if(mysqli_num_rows($res1)>0)
{
	$_SESSION['uid']=$email;
	
	header('location:EditDeleteRecord.php');
	// "Login Successfully";
}
else
{
	echo "Invalid Userid and Password";
}
?>






































