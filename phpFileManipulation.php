<?php
// php create directory 
//mkdir("file_test");
//remove directory 
//rmdir("file_test");
// create file
//touch("test_file.txt");
//delete file 
//unlink("test_file.txt");
// create file and write into it 

// reading a file 
/*
$file = fopen("test.txt", "r") or die("unable to open");
while(!feof($file)) 
{
  echo fgets($file). "<br>";
}
fclose($file);
*/

//reading file 
//echo readfile("test.txt");
//$open_file = fopen("test.txt", "r") or die ("unable to open");
//echo fread($open_file, filesize("test.txt"));
//fclose($open_file);

// write into file 
/*
$open = fopen("test.txt", "w"/"r") or die ("unable to open ");
echo "<br>opened <br>";
$text = "my name is abdurehman";
fwrite($open, $text);
echo "<br> added to the text <br>";
fclose($open);
echo "<br> closed <br> ";
*/
/*
$open = fopen("test.txt", "r") or die ("unable to open ");
echo "<br>opened <br>";
echo fread($open, filesize("test.txt"));
//fwrite($open, $text);
//echo "<br> added to the text <br>";
fclose($open);
echo "<br> closed <br> ";
*/
/*
$open = fopen("test.txt", "a") or die ("unable to open ");
echo "<br>opened <br>";
$text = "my name is belete";
fwrite($open, $text);
echo "<br> added to the text <br>";
fclose($open);
echo "<br> closed <br> ";

*/
/*
$open = fopen("test.txt", "r") or die ("unable to open ");
echo "<br>opened <br>";
echo fread($open, filesize("test.txt"));
//fwrite($open, $text);
//echo "<br> added to the text <br>";
fclose($open);
echo "<br> closed <br> ";
*/
/*
$open = fopen("test.txt", "a") or die ("unable to open ");
echo "<br>opened <br>";
$text = "<br> my name is hilina";
fwrite($open, $text);
echo "<br> added to the text <br>";
fclose($open);
echo "<br> closed <br> ";
*/
//$open = fopen("test.txt", "r") or die ("unable to open");
//echo fread($open, filesize("test.txt"));
//fclose($open);


?>