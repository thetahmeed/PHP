<?php

// size of the array
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);                          

// getting array by index number
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// get the value by a loop
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

?>
