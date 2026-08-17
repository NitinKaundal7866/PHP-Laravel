<?php
$name = "Ali";
$marks = 85;
$bonus = 5;

$total = $marks + $bonus;

echo "Name: " . $name . "<br>";
echo "Total Marks: " . $total . "<br>";
print("Congratulations! You Passed.");
echo "<br>";


/*if (50 >= $total) {
    $status = "Pass";
} else {
    $status = "Fail";
}*/
$status = ($total >= 50) ? "Pass" : "Fail" ;
echo "Result: ".$status;
echo "<br>";


$a = 10;
$b = 5;

echo "Echo Output<br>";
echo "+ Value: " . $a + $b . '<br>';
echo "- Value: " . $a - $b . '<br>';
echo "* Value: " . $a * $b . '<br>';
echo "/ Value: " . $a / $b . '<br><br>';

echo "Print Output<br>";
print "+ Value: " . $a + $b . '<br>';
print "- Value: " . $a - $b . '<br>';
print "* Value: " . $a * $b . '<br>';
print "/ Value: " . $a / $b . '<br>';
?>