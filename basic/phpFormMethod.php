<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>html form</title>
</head>
<body>
	<form action="" method="post">
		F_name: <input type="text" name="f_name"><br><br>
		L_name: <input type="text" name="l_name"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>
<?php
/*
if (isset($_GET['submit'])) {
	echo "<br> the form data recived<br>";
	echo "the first name is : " . $_GET['f_name'] ."<br>";
	echo "the last name is : " . $_GET['l_name'];
	// code...
}
*/

if (isset($_POST['submit'])) {
	echo "<br> the form data recived<br>";
	echo "the first name is : " . $_POST['f_name'] ."<br>";
	echo "the last name is : " . $_POST['l_name'];
	// code...
}

/*
if (isset($_REQUEST['submit'])) {
	echo "<br> the form data recived<br>";
	echo "the first name is : " . $_REQUEST['f_nmae']."<br>";
	echo "the last name is : " . $_REQUEST['l_name'];
	// code...
}
*/
?>