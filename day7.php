<?php
// 1. Create an array of 5 numbers and print total count
$numbers = [10, 20, 30, 40, 50];
echo "Total numbers: " . count($numbers) . "<br><br>";

// 2. Merge two arrays of colors
$colors1 = ["Red", "Green"];
$colors2 = ["Blue", "Yellow"];
$allColors = array_merge($colors1, $colors2);
echo "Merged Colors: ";
print_r($allColors);
echo "<br><br>";

// 3. Check if "Apple" exists in fruit array
$fruits = ["Apple", "Banana", "Mango"];
if (in_array("Apple", $fruits)) {
    echo "Apple found!<br><br>";
} else {
    echo "Apple not found!<br><br>";
}

// 4. Print only keys of an associative array
$person = ["name" => "John", "age" => 25, "city" => "London"];
echo "Keys: ";
print_r(array_keys($person));
echo "<br><br>";

// 5. Sort an array in ascending and descending order
$nums = [4, 2, 8, 1];
sort($nums);
echo "Ascending: ";
print_r($nums);
echo "<br>";

rsort($nums);
echo "Descending: ";
print_r($nums);
echo "<br><br>";

// 6. Remove duplicate values
$duplicates = [1, 2, 2, 3, 4, 4, 5];
$unique = array_unique($duplicates);
echo "Unique Values: ";
print_r($unique);
?>
