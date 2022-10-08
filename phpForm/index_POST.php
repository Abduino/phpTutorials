<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>on hand</title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		User Name: <input type="text" name="u_name"><br><br>
		Password : <input type="password" name="pass"><br><br>
		<input type="submit" name="submit" value="login">
		<input type="file" accept="image/*" name="file_upload">
	</form>
	<?php
         if(isset($_POST['submit']))
         {
         	echo "submited<br>";
         	if (!empty($_FILES['file_upload']['name'])) 
         	{
         	    $name = $_FILES['file_upload']['name'];
         		if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $name)) 
         		{
         			echo 'File is successfully uploaded.';
         			// code...
         		}
         		else
         		{
         			echo 'There was some error moving the file to upload directory.';
         		}
         	        	        		
         		
         	}
         	else
         	{
         		echo "oass empty";
         	}

         	echo "<br> the user name is : " . $_POST['u_name'];
         	echo "<br> the password is : " . $_POST['pass'];

         }


	?>

</body>
</html>