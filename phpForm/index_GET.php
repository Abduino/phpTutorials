<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>on hand</title>
</head>
<body>
	<form method="get">
		User Name: <input type="text" name="u_name"><br><br>
		Password : <input type="password" name="pass"><br><br>
		<input type="submit" name="submit" value="login">
	</form>
	<?php
         if(isset($_GET['submit']))
         {

         	echo "<br> the user name is : " . $_GET['u_name'];
         	echo "<br> the password is : " . $_GET['pass'];

         }


	?>

</body>
</html>