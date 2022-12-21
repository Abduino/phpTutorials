<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>file upload </title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		Select file to upload: <input type="file" name="file_upload">
		<input type="submit" name="submit">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		if (!empty($_FILES['file_upload']['name'])) {
			$name = $_FILES['file_upload']['name'];
			if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $name)) {
				echo "File is successfully uploaded.";
				echo "Uploaded image '$name'<br /><img src='$name' />";
				// code...
			}
			else{
				echo "There was some error moving the file to upload directory.";
			}
			
		}
		
	}

	?>
</body>
</html>