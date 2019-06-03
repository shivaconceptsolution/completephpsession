<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div style="float: right">	
<h1>Register Here</h1>	
<hr>
<form action="addp.php" method="post">
<input type="text" name="temail" placeholder="email" />
<br>
<br>
<input type="text" name="tpass" placeholder="password" />
<br>
<br>
<input type="text" name="tmobile" placeholder="mobile" />
<br>
<br>
<input type="text" name="tfname" placeholder="fname" />
<br>
<br>
<input type="text" name="tage" placeholder="age" />
<br>
<br>

<input type="submit" name="btn" value="Insert" />

</form>
</body>
</div>
<div style="float:left;">
	<h1>Login Here</h1>
	<hr>
<form action="login.php" method="post">
<input type="text" name="temail" placeholder="email" />
<br>
<br>
<input type="password" name="tpass" placeholder="password" />
<br>
<br>

<input type="submit" name="btn" value="Login" />

</form>
</div>
</html>