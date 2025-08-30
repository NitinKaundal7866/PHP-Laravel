<?php
// Variables
$a = 12;
$b = 5;

// 1. Arithmetic Operations
echo "Arithmetic Operations:<br>";
echo "$a + $b = " . ($a + $b) . "<br>";
echo "$a - $b = " . ($a - $b) . "<br>";
echo "$a * $b = " . ($a * $b) . "<br>";
echo "$a / $b = " . ($a / $b) . "<br>";
echo "$a % $b = " . ($a % $b) . "<br>";
echo "$a ** $b = " . ($a ** $b) . "<br><br>";

// 2. Assignment Operators
echo "Assignment Operations:<br>";
$a += 10; // 22
$b -= 2;  // 3
echo "a after += 10: $a<br>";
echo "b after -= 2: $b<br><br>";

// 3. Comparison Operators
echo "Comparison Operations:<br>";
echo "a == b: " . var_export($a == $b, true) . "<br>";
echo "a === b: " . var_export($a === $b, true) . "<br>";
echo "a > b: " . var_export($a > $b, true) . "<br>";
echo "a < b: " . var_export($a < $b, true) . "<br><br>";

// 4. Logical Operators
echo "Logical Operations:<br>";
$x = true;
$y = false;
echo "x && y: " . var_export($x && $y, true) . "<br>";
echo "x || y: " . var_export($x || $y, true) . "<br>";
echo "!x: " . var_export(!$x, true) . "<br>";
?>
