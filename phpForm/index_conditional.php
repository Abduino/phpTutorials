<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>on hand</title>
</head>
<body>
	<form method="get">
		Grade : <input type="text" name="grade"><br><br>
		<input type="submit" name="submit" value="Check">
	</form>
	<?php
         if(isset($_GET['submit']))
         {
         	$grade = $_GET['grade'];
         	switch ($grade) 
         	{
         		case 'A':
         			echo "your grade is A";// code...
         			break;
         		case 'B':
         			echo "your grade is B";// code...// code...
         			break;
         		case 'C':
         			echo "your grade is C";// code...// code...
         			break;
         		default:

         			echo "your grade is no grade"; // code...
         			break;
         	}

         }


	?>

</body>
</html>