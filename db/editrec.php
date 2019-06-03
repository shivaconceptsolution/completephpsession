


<?php
$id=$_REQUEST['q'];
include('conn.php');
$res1 = mysqli_query($conn,"select * from patient where emailid='$id'");
if($x= mysqli_fetch_array($res1))
{  ?>
<form action="edit.php" method="post" name="frm2">	
<table border="1">
<tr><th>Emailid</th>
<td><input type="text" value="<?php  echo $x[0];  ?>" name="temail"  /></td></tr>
<tr><th>Password</th>
<td><input type="text" value="<?php  echo $x[1];  ?>" name="tpass"  /></td></tr>
<tr><th>Mobileno</th><td><input type="text" value="<?php  echo $x[2];  ?>" name="tmobile"  /></td></tr>
<tr><th>Fullname</th><td><input type="text" value="<?php  echo $x[3];  ?>" name="tfname"  /></td></tr>
<tr><th>Age</th><td><input type="text" value="<?php  echo $x[4];  ?>" name="tage"  /></td></tr>
<tr><td colspan="2"><input type="submit" name="btnupdate" value="update" /> </td>

</tr>	
	  


<?php
}

?>
</table>
</form>