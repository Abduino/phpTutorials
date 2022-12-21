<?php
$con = mysqli_connect("localhost","root","","thu_test");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>new one</title>
</head>
<body>
	<table border="2">
		<tr>
			<td>id</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Email</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Abdurehman</td>
			<td>Redi</td>
			<td>abdurehmanredi@gmail.com</td>
		</tr>
		
			<?php
			$sel = "SELECT * FROM thu_table";
			$result= mysqli_query($con,$sel);
			if(mysqli_num_rows($result))
			{
				while($rows=mysqli_fetch_array($result)){
					echo"<tr>"; 
					echo "<td>". $rows['id']."</td>";
					echo "<td>".$rows['fname']."</td>";
					echo "<td>".$rows['lname']."</td>";
					echo "<td>".$rows['email']."</td>";
					echo "</tr>";

				}
			}


			?>
			
		
	</table>

</body>
</html>