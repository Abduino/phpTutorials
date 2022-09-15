<?php

// create a directory
//mkdir("files");
//create file
//touch("files/new.txt");
//delete file
//unlink("files/new.txt");
//rmdir("files");





//check and create 
/*
$file_name = "files/new.txt";
if (!file_exists("files")) {
	echo "directory not exists";// code...
	mkdir("files");
}
else
{
	echo "<br> directory exists";
}
*/



/*
if (!file_exists("files/new.txt")) {
	echo "file not exists";// code...
	touch("files/new.txt");
}
else
{
	echo "<br> file exists<br>";
	$open = fopen("files/new.txt","w/r/a") or die("can not open");
	$new_text = "my name is abdurehman redi ";
	fwrite($open, $new_text);
	echo "<br> written <br>";
	//$file_size = filesize($file_name);
	//$file_text = fread($open, $file_size);
	fclose($open);
}
*/



/*
echo "<br> ------------------------ <br>";
if (file_exists("files/new.txt")) {
	echo "<br> file exists to open";// code...
	//$myfile = fopen("webdictionary.txt", "w/r/a") or die("Unable to open file!");
	$open = fopen("files/new.txt","w/r/a") or die("can not open");
	echo "<br> opened <br> ";
	echo fgets($open);
	//while(!feof($open)){
	//	$text = fgets($open);
	//	echo $text . "<br>";
	//}


	$file_size = filesize("files/new.txt");
	$file_text = fread($open, $file_size);
	fclose($open);
	echo "<br> closed";
	echo "<br>***********************<br>";
	echo "the file size is:  $file_size <br>";
	echo "the file is : <br> $file_text";
	echo "<br> opened <br> ";

}
else
{
	echo "<br> file not exists to open";
}

*/






// write to file
/*
$file_name = "files/new.txt";
if (file_exists($file_name)) {
	echo "<br> file exists to read";// code...
	//$myfile = fopen("webdictionary.txt", "w/r/a") or die("Unable to open file!");
	$open = fopen($file_name,"w/r/a") or die("can not open");

	echo "<br> opened <br>";

	$file_size = filesize($file_name);
	$file_text = fread($file_name, $file_size);
	fclose($file_name);
	echo "<br> closed";
	echo "<br>***********************<br>";
	echo "the file size is:  $file_size <br>";
	echo "the file is : <br> $file_text";
	echo "<br> opened <br> ";
}
else
{
	echo "<br> file not exists to open";
}
*/





/*
$new_text = "my name is abdurehman redi ";
fwrite($open, $new_text);
echo "<br> written <br>";
$file_size = filesize($file_name);
$file_text = fread($open, $file_size);
fclose($open);
echo "<br> closed";
echo "<br>***********************<br>";
echo "the file size is:  $file_size <br>";
echo "the file is : <br> $file_text";
//open file
*/



?>