<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>upload file</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
	Select file to upload:<input type="file" name="file_name">
	<input type="submit" name="submit">
</form>
<?php
if (isset($_POST['$submit'])) 
{
	echo "submiteed";

	$name = $_FILES['file_name']['name'];
	if(move_uploaded_file($_FILES['file_name']['tem_name'], $name))
	{
		echo 'File is successfully uploaded.';
	}
	else
	{  
		echo 'There was some error moving the file to upload directory.';

	//move_uploaded_file($_FILES['file_name']['tem_name'], $name);
	//echo "Uploaded image '$name'<br /><img src='$name' />";
    }

}
?>
</body>
</html>
<?php
// create directory 
//mkdir("class");
//rmdir("class");

//touch("students.txt");
//write into file w mode
/*
$open = fopen("students.txt", "w") or die("unable to open");

//$s1 = "my name is nola. ";
$s2 = "my name is watson. "; 

fwrite($open, $s2);
fclose($open);
//fwrite($open,$s2)
*/

//write into file a mode
/*
$open = fopen("students.txt", "a") or die("unable to open");

$s1 = "my name is nola. ";
//$s2 = "my name is watson. "; 

fwrite($open, $s1);
fclose($open);
echo "done!!!";

$open = fopen("students.txt", "r") or die("unable to open");
$read = fread($open,filesize("students.txt"));
echo "the text file is<br>" . $read;
fclose($open);
//readfile("students.txt");
*/

echo "";
?>