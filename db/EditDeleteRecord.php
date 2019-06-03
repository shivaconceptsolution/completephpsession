<h1>View ALL PATIENT INFORMATION</h1>
<hr>
<a href="logout.php">Logout</a>
<?php
session_start();
if(!isset($_SESSION['uid']))
{
	header('location:index.php');
}
?>

Welcome <?php echo $_SESSION['uid']; ?>

<table border="1">
<tr><th>Emailid</th><th>Password</th><th>Mobileno</th><th>Fullname</th><th>Age</th></tr>

<?php
include('conn.php');

$res1 = mysqli_query($conn,"select * from patient");
while($x= mysqli_fetch_array($res1))
{  ?>

<tr>
<td>
	<?php  echo $x[0];  ?></td>
<td><?php  echo $x[1];  ?></td>
<td><?php  echo $x[2];  ?></td>
<td><?php  echo $x[3];  ?></td>
<td><?php  echo $x[4];  ?></td>
<td><a href="editrec.php?q=<?php  echo $x[0];  ?>"><img src="edit.png" width="20" height="20" /></a> </td><td><a href="deleterec.php?q=<?php  echo $x[0];  ?>" ><img src="del.png" width="20"  height="20" /></a></td>

</tr>	
	  


<?php
}

?>
</table>