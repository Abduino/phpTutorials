<?php
$table = array("Fname"=>"abdurehman","Lname"=>"redi");
echo " <br> for each loop<br>";
foreach ($table as $name => $p_name) {
	echo "$name=>$p_name<br>";
	// code...
}
$multi=array(array("Fname","Lname","Class"), array("abdure","redi","second"),array("lema","abdi","first"),array("belete","kume","fourth"));
echo "<br> multi-dimensional array<br>";
for($i=0;$i<4;$i++){
	for ($j=0; $j <= 2 ; $j++){
		echo $multi[$i][$j]. " ";
	}
	echo "<br>";
}
/*
function sum(){
	echo "<br> function started<br>";
	$num1 = 10;
	$num2 = 20;
	$sum=$num1 + $num2;
	echo "The sum is = $sum";
}
*/
function fun_para($num1,$num2){
	$sum = $num1 + $num2;
	return $sum;
}

$return= fun_para(10,20);
echo "the sum is = $return";
?>