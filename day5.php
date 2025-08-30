<?php
// 1. Create an array of 5 favorite fruits
$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

// 2. Print first and last element
echo "First fruit: " . $fruits[0] . "<br>";
echo "Last fruit: " . $fruits[count($fruits) - 1] . "<br><br>";

// 3. Change the 2nd fruit
$fruits[1] = "Pineapple";
echo "Changed 2nd fruit: " . $fruits[1] . "<br><br>";

// 4. Add one more fruit at the end
$fruits[] = "Strawberry";
echo "New fruit added: " . $fruits[count($fruits) - 1] . "<br><br>";

// 5. Print total number of fruits
echo "Total fruits: " . count($fruits) . "<br><br>";

// 6. Loop through and print all fruits
echo "All Fruits:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>
