<?php
$con = mysqli_connect("localhost","root","","thu_test");

if($con){
	echo "done!!";
}
else{
echo "try again";}
/*
$thu_insert = "INSERT INTO thu_table (fname,lname,email) VALUES ('leta', 'lelisa','letaleli@gmail.com')";
if(mysqli_query($con,$thu_insert)){
	echo "done!!";
}
*/
/*
$thu_sel = "SELECT * FROM thu_table ";

$result = mysqli_query($con,$thu_sel);
if(mysqli_query($result)>0){
	while($rows=mysqli_fetch_array($result)){
		echo $rows['id'] ." " . $rows['fname']. " " .$rows['lname'] . " " . $rows['email']
	}
}
*/

$sel = "SELECT * FROM thu_table WHERE id=2";
$result = mysqli_query($con,$sel);
if(!empty($result)){
	echo "<br>___<br>";
	$rows = mysqli_fetch_array($result);
	echo $rows['id']. $rows['fname'] . $rows['lname']. $rows['email'];
}
/*
$sel = "SELECT fname WHERE id=2";
$result= mysqli_query($con, $sel);
if(!empty($result)){
	echo "the name is : " . $result;
}

*/

$update = "UPDATE thu_table SET fname='abdre' WHERE id=2";
if(mysqli_query($con,$update))
{
	echo "<br>-----------------<br>updated"
}
/*
$delete = "DELETE thu_table WHERE id=3";
if(mysqli_query($con$delete)){
	echo "<br> deleted <br>";
}
*/
$sel = "SELECT * FROM thu_table";
$reult= mysqli_query($con,$sel);
if(mysqli_num_rows($result)>0){
	whilt
}
?>