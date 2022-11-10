<?php

$products[0] = "Tires";
$products[1] = "Oil";
$products[2] = "Spark Plugs";
$products[3] = "battery";
$products[4] = "jar";
print_r($products);
var_dump($products);
print nl2br("\nusing for loop");
//echo ($products);
for ($i=0; $i < 4; $i++) { 
	// code...
	print nl2br("\n $products[$i]");
}
$size=array("Big","Medium","Short");  
echo "Size: $size[0], $size[1] and $size[2]";  
?>