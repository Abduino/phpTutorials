
<html>
<head>
	<meta charset="utf-8">
	<title>new one </title>
</head>
<body>
	<form method="post" action="">
		<input type="text" name="userName">
		<input type="submit" name="submit" value="send">
	</form>
	<?php
	    if (isset($_POST['submit'])) 
	    {
	    	echo "good work" . $_POST['userName'];
		}
	?>

</body>
</html>
