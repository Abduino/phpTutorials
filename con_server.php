<?php
/*
// connecting to server
$server = "localhost";
$user_name = "root";
$password = "";

$con = mysqli_connect($server,$user_name,$password);
if(!$con){
	echo "not connected";

}
else{
	echo "done !!";
}



//creating database
$server = "localhost";
$user_name = "root";
$password = "";

$con = mysqli_connect($server,$user_name,$password);
if(!$con){
	die ("not connected");

}
echo "done !!";
$c_db = "CREATE DATABASE for_test";
if(mysqli_query($con,$c_db)){
	echo "<br> good work";
}



// create table inside database
$server = "localhost";
$user_name = "root";
$password = "";
$db_name = "for_test";

$con = mysqli_connect($server,$user_name,$password,$db_name);
if(!$con){
	die ("not connected");

}
echo "done !!";
$c_db = "CREATE TABLE forTest( 
id INT AUTO_INCREMENT PRIMARY KEY,
f_name VARCHAR(50) NOT NULL,
l_name VARCHAR(50) NOT NULL,
email VARCHAR(50))";
if(mysqli_query($con,$c_db)){
	echo "<br> table created";
}
else{
	echo "error";
}



// insert data into a table
$server = "localhost";
$user_name = "root";
$password = "";
$db_name = "for_test";

$con = mysqli_connect($server,$user_name,$password,$db_name);
if(!$con){
	die ("not connected");

}
echo "done !!";

$ins_data = "INSERT INTO forTest (f_name,l_name,email) Values ('john','redi','abc@gmail.com')";

if(mysqli_query($con,$ins_data)){
	echo "<br> data inserted";
}
else{
	echo "error";
}
mysqli_close($con);
*/

//select data from database 

$server = "localhost";
$user_name = "root";
$password = "";
$db_name = "for_test";

$con = mysqli_connect($server,$user_name,$password,$db_name);
if(!$con){
	die ("not connected");

}
echo "done !!";

$sel_data = "SELECT * FROM forTest";
$result = mysqli_query($con,$sel_data);
if(mysqli_num_rows($result) > 0){
	while ($row = mysqli_fetch_assoc($result)) {
		echo "id = " . $row['id']. "first name = " . $row['f_name'] . "last name = " . $row['l_name'] . "email =  " . $row['email'];
		// code...
	}
}
mysqli_close($con);

?>