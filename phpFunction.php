<?php
//function without parameter
echo "enter number<br>";
$user = (int) readline("enter an integer number : ");
echo $user;
function display()
{

	echo "<br> function started <br>";
}

display();
//function with parameter 
function add($num1,$num2)
{


	$sum = $num1 + $num2;
	return $sum;
}

$num1_o = 10;
$num2_o = 20;
echo "<br> the sum is ";
$added = add(50,$num2_o);
echo "=> $added ";



?>