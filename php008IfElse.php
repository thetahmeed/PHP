<?php
$t = date("H");

// if
if ($t < "20") {
  echo "Have a good day!";
}

// if else
if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

// if else if
if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

?>
