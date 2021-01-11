<?php

function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function

// function with arguments
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

// Not strict
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

// Strict /* <?php declare(strict_types=1); // strict requirement [Need to add this] */
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown


// with a default value /* <?php declare(strict_types=1); // strict requirement [Need to add this] */
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50

// returning value /* <?php declare(strict_types=1); // strict requirement [Need to add this] */
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

// returning value with return  /* <?php declare(strict_types=1); // strict requirement [Need to add this] */
function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);

?>
