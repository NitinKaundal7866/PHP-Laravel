<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    1. PHP Operators:
    (1) Arithmetic operators: +, -, /, *, %, **
    (2) Assignment operators: =, +=, -=, /=, %=, *=
    (3) Comparison operators: =, ==, ===, !=
    (4) Increment/Decrement operators: ++x, --x, x++, x--
    (5) Logical operators: &&, ||, !, And,Xor
    (6) String operators: ., .=
    (7) Array operators: +, ==, ===, !=, <>, !==
    (8) Conditional operators: ?:, ??

    2. PHP Variable Scope: Local,Global,Static
        <?php
        $x = 10; //Global variable
        function myTest()
        {
            // static $x=26;
            $x = 15; // Local Variable
            echo $x;
        }

        echo "$x <br>";
        myTest();
        ?>

    3. PHP Concatenate Stings
    <?php
    $a = "Hello World";
    $b = "Happy";
    echo $a . " " . $b;
    ?>

    4. PHP Implode/Explode Functions
    <?php
    $a = "Hello World ";
    $b = "Car";
    $Exp = explode(" ", $a . $b);
    print_r($Exp);
    ?>

    <?php
    $data = array("car", "bike", "bus");

    $Implode_data = implode(",<br>", $data);
    echo "$Implode_data";
    ?>

</body>

</html>