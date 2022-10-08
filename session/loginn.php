<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="uname"><br>
		<input type="text" name="pass"><br>
		<input type="submit" name="submit">
	</form>
	<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$_uname=$_POST['uname'];
		$_pass = $_POST['pass'];
		$_SESSION['username'] = $_uname;
		$_SESSION['password'] = $_pass;
		echo " well come " . $_SESSION['username'];

	}


	?>

</body>
</html>