1. Create three variables: Name, Age, City
<?php
$Name = "Nitin";
$Age = 25;
$City = "Mohali";

echo "Name = $Name, Age= $Age, City= $City";
?>


2. Create an associative array to store a student's information (e.g., Name, Age, City).
<?php
$student = array("Name" => "Nitin", "Age" => "25", "City" => "Mohali");

echo $student["Name"];
echo "<br>";

var_dump($student);
echo "<br>";

print_r($student);
?>

3. Create an indexed array containing five colors.
<?php
$colors = array("Red", "Green", "Yellow", "Blue", "White");

echo $colors[0];
echo "<br/>";

var_dump($colors);
echo "<br/>";

print_r($colors);
?>