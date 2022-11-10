<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>registration form </title>
</head>
<body>
	<form action="" method="post">
		
		First Name <input type="text" name="f_name"><br><br>
		Last Name <input type="text" name="l_name"><br><br>
		Email <input type="text" name="email"><br><br>
		<input type="submit" name="submit">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		echo "<br> submited ---------------------<br>";
		$server = "localhost";
		$u_name = "root";
		$pass = "";
		$db_name = "mydb";
		$fname= $_POST['f_name'];
		$lname = $_POST['l_name'];
		$email = $_POST['email'];
		echo "<br> submited ---------------------<br>";
		echo "<br> the f name is : " . $fname . "the last name is : " . $lname . " email address is: " . $email;
		echo "<br> submited ---------------------<br>";

		$con = mysqli_connect($server,$u_name,$pass,$db_name);
		if ($con) {
			echo "<br> --------------------connected-------------------<br> ";

			$insert = "INSERT INTO myguests (firstname,lastname,email) VALUES ('$fname','$lname','$email')";
			if(mysqli_query($con,$insert)){
				echo "<br> successfully inserted <br> ";
			}
			// code...
		}
		// code...
	}





	?>

</body>
</html>