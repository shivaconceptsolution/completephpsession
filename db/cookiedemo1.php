<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
Enter Full name
<br>
<input type="text" name="txt1"  />
<br>
<input type="submit" name="btnsubmit" value="Create" />
<input type="submit" name="btnsubmit1" value="Remove" />

</body>

</html>
<a href="ViewCookie.php">View Cookie</a>
<?php
if(isset($_REQUEST['btnsubmit']))
{
    setcookie('uname',$_REQUEST['txt1'],time()+3600);



}
if(isset($_REQUEST['btnsubmit1']))
{
    setcookie('uname','',time()-3600);



}



?>




