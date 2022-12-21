<?php
// global and local variable
$glo= 20;

function display(){
	$loc = 10;

	echo "<br> local variable : $loc";
	global $glo;
	echo "<br> global variable is: " .$glo;
}
display();
?>