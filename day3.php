<?php
// 1. Check if a number is positive, negative, or zero
$number = -10;

if ($number > 0) {
    echo "$number is Positive<br>";
} elseif ($number < 0) {
    echo "$number is Negative<br>";
} else {
    echo "$number is Zero<br>";
}

// 2. Grading system
$marks = 82;

if ($marks >= 90) {
    echo "Grade A<br>";
} elseif ($marks >= 75) {
    echo "Grade B<br>";
} elseif ($marks >= 50) {
    echo "Grade C<br>";
} else {
    echo "Fail<br>";
}

// 3. Ternary operator - Adult check
$age = 17;
echo ($age >= 18) ? "Adult" : "Minor";
?>
