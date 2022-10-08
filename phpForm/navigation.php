<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>navigation </title>
</head>
<body>
	<?php
	echo "<br> the web data recived <br>";
	echo "the first name is : " .$_GET['f_name'] . "<br>";
	echo "the last name is : " . $_GET['l_name'];



	?>
	- <a href="index_GET.php"> GET method </a> - 
	<a href="index_POST.php"> POST method </a> - 
	<a href = "new.php"> Home </a> - 

</body>
</html>