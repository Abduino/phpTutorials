<?php
$user = "root";
$pass = "";
$host = "localhost";
$dbdb = "php_database";

//connecting to server   
/*$conn = new mysqli($host, $user, $pass, $dbdb);
if ($conn->connect_error) 
{
   die("Connection failed: " . $conn->connect_error);
} 
else{
   echo 'Connected successfully';
   $conn->close();
}

// Create connection
$conn = mysqli_connect($host, $user, $pass);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully pro";
mysqli_close($conn);
echo "<br>closed";

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "successfully connected";
echo "<br>----------------------------------------";


$re_data = "SELECT * FROM MyGuests";



$data = mysqli_query($conn,$re_data);


echo "<br> fetching done 1 <br> ---------------------<br>";
if(mysqli_num_rows($data) > 0)
{
  $num_rows = mysqli_num_rows($data);
  echo "the number of rows is ". $num_rows ."<br>";
  echo "<br> fetching done 2 <br> ---------------------<br>";
  
  while ($row = mysqli_fetch_array($data)) 
  {
    echo $row["id"]. " " . $row["firstname"] . " " . $row["lastname"] . " " . $row["email"] . " " . $row["reg_date"] . "<br>";
    // code...
  }
}
else{
  echo "<br> error";
}



/*
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('belete', 'kebede', 'ab@gmail.com')";


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('bel', 'keb', 'abcd@gmail.com')";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('beleteengna', 'kebedeachew', 'abebekebede@gmail.com')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
*/



?>