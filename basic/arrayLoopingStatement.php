<?php

for ($i=0; $i < 5; $i++) { 
	for ($j=0; $j < 5; $j++) { 
		echo "*";// code...
	}// code...
	echo "<br>";
}
// indexed array
$set = array(5,4,3,2,1);
echo "<br>" . $set[0];
for ($i=0; $i < 5; $i++) { 
	echo $set[$i];// code...
	echo "<br>";
}
$class = array("abdurehman","redi","intisar","nesru");
echo "<br> for each <br>";
foreach ($class as $student) {
	echo "<br>" . $student . "<br>";// code...
}

//associative array
echo "<br> associative array <br>";
$person = array("abdure" => "redi","intisar" => "nesru");
foreach ($person as $student => $fname){
	
	echo "student first name is " . $student. " and father name is " . $fname . "<br>";


}
// while loop 
$num =0;
echo "<br> while loop <br>";
while ($num <=10) {
	echo "<br>" . $num;
	$num++;
	// code...
}


// do while loop
$num =0;
echo "<br> do while loop <br>";
do {
	echo "<br> " . $num;
	$num++;
	// code...
} while ($num <= 10);


?>