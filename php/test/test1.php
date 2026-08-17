<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  


<!-- Q2. Fill in the Blanks 

PHP code starts with  .   -->

___//_______ is used for single-line comments.  

// Arrays store _multiple_________ values.  

// __else________ is used when an if condition is false.  

 

// Section B – Practical Coding 

// Q3. PHP Syntax & Comments 

// Write a PHP program that: 

// Prints "Welcome to PHP"  

// Uses one single-line comment  

// Uses one multi-line comment  

<?php  

echo "Welcome to PHP"; 

// single line comment 
/* multiline  

Comment */ 

?> 

 

// Q4. Variables 

// Create variables for: 

// Name = Rahul  

// Age = 22  

// City = Delhi  

// Print the output as: 

// Name : Rahul 

// Age : 22 

// City : Delhi 

 

<?php  

$name = 'Rahul'; 

$age = 22; 

$city = 'Delhi'; 

 

echo " Name : ". $name ."<br>" ; 

echo " Age : " . $age ."<br>"; 

echo " City: " . $city; 

 

?> 

 

// Q5. Echo and Print 

// Write a PHP program that prints: 

// Learning PHP is Easy 

// First using echo  

// Then using print  

<?php  

echo "Learning PHP is Easy<br>"; 

print("Learning PHP is Easy"); 

?> 

// Q6. Data Types 

// Create variables of the following data types: 

// String  

// Integer  

// Float  

// Boolean  

// Print each variable. 

<?php  

$string = 'text'; 

$integer = 22; 

$float = 13.56; 

$boolean = true; 

 

echo "String : ". $string ."<br>"; 

echo "Integer : " . $integer ."<br>"; 

echo "Float: " . $float ."<br>"; 

echo "Boolean: " . $boolean; 

 

?> 

 

// Q7. Operators 

// Create two variables: 

// $a = 25; 

// $b = 5; 

// Perform and display: 

// Addition  

// Subtraction  

// Multiplication  

// Division  

// Modulus  

// Expected Output: 

// Addition = 30 

// Subtraction = 20 

// Multiplication = 125 

// Division = 5 

// Modulus = 0 

 

<?php  

$a = 25; 

$b = 5; 

 

echo "Addition: ". $a + $b ."<br>"; 

echo "Subtraction: " . $a - $b ."<br>"; 

echo "Multiplication: " . $a * $b ."<br>"; 

echo "Division: " . $a / $b ."<br>"; 

echo "Modulus: " . $a % $b; 

 

?> 

 

// Q8. If...Else 

// Write a PHP program to check whether a student has passed. 

// Condition: 

// Marks ≥ 40 → Pass  

// Otherwise → Fail  

// Example: 

// Marks = 35 

 

// Output: 

// Fail 

 

<?php  

$marks = 35; 

  if($marks >= 40){ 

    echo "Pass"; 

  } 

else 

{ 

  echo "Fail"; 

} 

?> 

 

// Q9. If...Else If...Else 

// Write a PHP program to display grades based on the following conditions: 

// 90–100 → Grade A  

// 75–89 → Grade B  

// 60–74 → Grade C  

// 40–59 → Grade D  

// Below 40 → Fail  

<?php  

$marks=34; 

 

if($marks>=90){ 

  echo "90–100 → Grade A"; 

}else if ($marks>=75){ 

  echo "75–89 → Grade B"; 

}else if ($marks>=60){ 

  echo "60–74 → Grade C"; 

}else if ($marks>=40){ 

  echo "40–59 → Grade D"; 

}else{ 

  echo "Below 40 → Fail"; 

} 

?> 

// Q10. Switch Statement 

// Create: 

// $day = 4; 

// Display the day name according to the value. 

// Day Number 

// Day Name 

// 1 

// Monday 

// 2 

// Tuesday 

// 3 

// Wednesday 

// 4 

// Thursday 

// 5 

// Friday 

// 6 

// Saturday 

// 7 

// Sunday 

// If the value is invalid, display: 

// Invalid Day 

 

<?php  

$day = 4; 

 

switch($day){ 

  case 1: 

    echo "Monday"; 

    break; 

  case 2: 

    echo "Tuesday"; 

    break; 

  case 3: 

    echo "Wednesday"; 

    break; 

  case 4: 

    echo "Thursday"; 

    break; 

  case 5: 

    echo "Friday"; 

    break; 

  case 6: 

    echo "Saturday"; 

    break; 

  case 7: 

    echo "Sunday"; 

    break; 

  default: 

    echo "Invalid Day"; 

    break; 

} 

?> 

 

 

// Q11. Indexed Array 

// Create an array of five fruits. 

// Example: 

// $fruits = array("Apple", "Banana", "Mango", "Orange", "Grapes"); 

// Print: 

// First fruit  

// Third fruit  

// Fifth fruit  

<?php  

 $fruits = array("Apple", "Banana", "Mango", "Orange", "Grapes"); 

  

 print($fruits[0] . '<br>'); 

 print($fruits[2] . '<br>'); 

 print($fruits[4]); 

?> 

 

// Q12. Array with Loop 

// Create an array of five colors. 

// Print all colors using a foreach loop. 

// Expected Output: 

// Red 

// Blue 

// Green 

// Yellow 

// Black 

 

<?php  

$colors = array("Red", "Blue", "Green", "Yellow", "Black"); 

 

foreach($colors as $color){ 

  echo "$color<br>"; 

} 

?> 

 

// Q13. Student Information 

// Create variables for: 

// Name  

// Age  

// Course  

// City  

// Display the information in the following format: 

// Student Details 

// --------------- 

// Name   : ______ 

// Age    : ______ 

// Course : ______ 

// City   : ______ 

 

<?php  

$name='ABC'; 

$age=45; 

$course= 'XYZ'; 

$city= 'BBB'; 

 

echo "Student Details<br>"; 

echo "--------------------<br>"; 

 

echo "Name : $name<br>"; 

echo "Age : $age<br>"; 

echo "Course : $course<br>"; 

echo "City : $city"; 

?> 

 

// Q14. Simple Calculator 

// Create two variables. 

// Perform and display: 

// Addition  

// Subtraction  

// Multiplication  

// Division  

// Display each result clearly. 

<?php  

$a = 45; 

$b = 8; 

 

echo "Addition: ". $a + $b ."<br>"; 

echo "Subtraction: " . $a - $b ."<br>"; 

echo "Multiplication: " . $a * $b ."<br>"; 

echo "Division: " . $a / $b; 

 

?> 

 

// Bonus Task 

// Create a single PHP program that includes the following concepts: 

// Variables  

// echo  

// Operators  

// if...else  

// Array  

// switch  

// Requirements: 

// Store a student's name.  

// Store the student's marks.  

// Display whether the student passed or failed.  

// Store five subjects in an array.  

// Print the second subject.  

// Use a switch statement to display the current day based on a day number. 

// Pending 
</body>
</html>