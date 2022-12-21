<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		Select a file: <input type="file" name="file_upload">
		<input type="submit" name="submit">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		if(!empty($_FILES['file_upload']['name'])){

			$name= $_FILES['file_upload']['name'];

			if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $name)){
				echo "done!!";
				echo "<img src=$name>";

			}
		}

		// code...
	}



	?>

</body>
</html>