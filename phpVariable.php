<?php
//how to declar a variable
$string = "hello world";
$integer = 20;
$float_v = 10.5;
echo "<br> the string variable is = " . $string;
echo "<br> the intiger variable is = " . $integer;
echo "<br> the float variable is = " . $float_v;

// local global and static variables
$num2 = 20; // declar global variable 
function loc_glob(){
	global $num2;
	$num1 = 10; // declar local variable
	echo "<br> local varibale " . $num1;// print local variable in the block
	echo "<br> global varibale " . $num2;// print global variable in the block
}
echo "<br> function call";
loc_glob();
//echo "<br> local variable outside the function";
//echo $num1;
//echo "<br> local varibale " . $num1;// print local variable outside the block
//echo "<br> global varibale " . $num2;// print global variable outside the block
echo "<br> static and non-static varibles";
function sta_nonstatic(){
	static $static =5;
    $non_static = 5;
    $static ++;
    $non_static ++;
    echo "<br> the output of the non-static variable is " . $non_static;
    echo "<br> the output of the static variable is " . $static;


}

echo "<br> the first call";
sta_nonstatic();
echo "<br> the second call";
sta_nonstatic();

//boolean type
echo "<br> boolean type<br>";
$foo = False;
echo json_encode($foo);
echo "<br> converted ";
echo (int)$foo;
echo "<br> using variable dumb ";
var_dump($foo);
echo "<br> using sprintf ";
echo sprintf($foo);
var_dump($foo);
if($foo){
	echo json_encode($foo);
}
echo "<br> getting data type and value <br>";
var_dump($string);
var_dump($integer);
var_dump($float_v);


?>