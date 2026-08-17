<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="part1">
        <h2>Student Result Card</h2>

        <?php
        $name = 'Ali';
        $age = 20;
        $percentage = 82;

        echo "Name: " . $name . '<br>' . "Age: " . $age . '<br>' . "Percentage: " . $percentage . "%" . '<br>';

        if ($percentage >= 40) {
            echo "Status: Pass<br>";
        } else {
            echo "Status: Fail<br>";
        }

        $percentage = 82;
        $age = 20;

        if ($percentage >= 80) {
            echo "Grade: A";
        } elseif ($percentage >= 60) {
            echo "Grade: B";
        } elseif ($percentage >= 40) {
            echo "Grade: C";
        } else {
            echo "Fail";
        }

        if ($age >= 18) {
            echo "<br>Category: Adult <br><br>";
        } else {
            echo "<br>Category: Minor <br><br>";
        }

        echo "<h3>Subjects:</h3>";
        $subjects = ["Math", "English", "Science", "Computer", "Urdu"];
        foreach ($subjects as $subject) {
            echo "$subject<br>";
        }
        echo "<br><br>";

        $cookie_name = "username";
        $cookie_value = "test123";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 1));

        if (isset($_COOKIE[$cookie_name])) {
            echo "Welcome Cookie : Yes";
        } else {
            echo "Welcome Cookie : No";
        }

         echo "<br>";

        session_start();
        $_SESSION['student-name'] = "test";
        if (isset($_SESSION['student-name'])) {
            echo "Session Active : Yes";
        }
        ?>
    </div>
</body>

</html>