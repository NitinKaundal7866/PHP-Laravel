<?php
// 1. Print numbers 1–10 using while loop
echo "While Loop (1 to 10):<br>";
$i = 1;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}
echo "<br><br>";

// 2. Print even numbers from 2–20 using for loop
echo "For Loop (Even numbers 2 to 20):<br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
}
echo "<br><br>";

// 3. Loop through an array of 5 names using foreach
echo "Foreach Loop (Names):<br>";
$names = ["Alice", "Bob", "Charlie", "David", "Eve"];
foreach ($names as $name) {
    echo $name . "<br>";
}
echo "<br>";

// 4. Skip printing number 5 using continue
echo "For Loop with continue (skip 5):<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) continue; 
    echo $i . " ";
}
?>
