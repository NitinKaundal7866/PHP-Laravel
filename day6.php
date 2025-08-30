<?php
// 1. Create an associative array with 3 students and their marks
$students = [
    "John" => 85,
    "Alice" => 92,
    "Bob" => 78
];

// 2. Print the mark of one student
echo "Alice's marks: " . $students["Alice"] . "<br><br>";

// 3. Update one student’s mark
$students["Bob"] = 82;
echo "Updated Bob's marks: " . $students["Bob"] . "<br><br>";

// 4. Add a new student with marks
$students["Eve"] = 90;
echo "Added Eve with marks: " . $students["Eve"] . "<br><br>";

// 5. Loop through and print all students with their marks
echo "All Students:<br>";
foreach ($students as $name => $marks) {
    echo "$name : $marks<br>";
}
?>
