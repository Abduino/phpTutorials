<!DOCTYPE html>
<html>
<head>
  <title>PHP Retrieve Data from MySQL using Drop Down Menu</title>
</head>
<body>

<form>
  City:
  <select>
    <option disabled selected>-- Select City --</option>
    <?php
        include "db.php";  // Using database connection file here
        $records = mysqli_query($db, "SELECT city_name From tblcity");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['city_name'] ."'>" .$data['city_name'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
</form>

<?php mysqli_close($db);  // close connection ?>

</body>
</html>