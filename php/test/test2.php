<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="part1">
        <!-- Part 1: Variables & Data Types
        Create the following variables:
        • Name = Ali
        • Age = 20
        • Percentage = 82
        Display all the values using echo. -->
        <h2>Student Result Card</h2>

        <?php
        $name = 'Ali';
        $age = 20;
        $percentage = 82;

        echo "Name: " . $name . '<br>' . "Age: " . $age . '<br>' . "Percentage: " . $percentage . '<br>';

        ?>
    </div>

    <div class="part2">
        <!-- Part 2: Operators
        • Check whether the percentage is greater than or equal to 40.
        • Store the result in a variable (Pass or Fail). -->


        <?php
        $percentage = 82;
        if ($percentage >= 40) {
            echo "Status: Pass";
        } else {
            echo "Status: Fail";
        }
        ?>
    </div>

    <div class="part3">
        <!-- Part 3: Conditional Statements
        Use if...elseif...else statements to calculate the student's grade.
        • 80–100 → Grade A
        • 60–79 → Grade B
        • 40–59 → Grade C
        • Below 40 → Fail
        Also determine the student's category:
        • Age ≥ 18 → Adult
        • Otherwise → Minor -->

        <?php
        $marks = 82;
        $age = 20;

        if ($marks >= 80) {
            echo "Grade: A";
        } elseif ($marks >= 60) {
            echo "Grade: B";
        } elseif ($marks >= 40) {
            echo "Grade: C";
        } else {
            echo "Fail";
        }

        if ($age >= 18) {
            echo "<br>Category: Adult <br><br>";
        } else {
            echo "<br>Category: Minor <br><br>";
        }
        ?>


    </div>
    <h3>Subjects:</h3>
    <div class="part4">
        <!-- Part 4: Arrays
        Create the following array:
        $subjects = ["Math", "English", "Science", "Computer", "Urdu"];
        Display all the subjects using a foreach loop. -->

        <?php
        $subjects = ["Math", "English", "Science", "Computer", "Urdu"];
        foreach ($subjects as $subject) {
            echo "$subject<br>";
        }
        echo "<br><br>";
        ?>
    </div>

    <div class="part5">
        <!-- Part 5: Loops
        Use a foreach loop to print all the subjects stored in the array. -->

        <?php
        $subjects = ["Math", "English", "Science", "Computer", "Urdu"];
        foreach ($subjects as $subject) {
            echo "$subject<br>";
        }
        ?>
    </div>

    <div class="part6">
        <!-- Part 6: Functions
        Create the following functions:
        getGrade($percentage)
        getCategory($age)
        Use these functions to determine the student's grade and category instead of writing the conditions directly. -->
        <?php
        function getGrade($percentage)
        {
            if ($percentage >= 80) {
                echo "Grade A";
            } elseif ($percentage >= 60) {
                echo "Grade B";
            } elseif ($percentage >= 40) {
                echo "Grade C";
            } else {
                echo "Fail";
            }
        }
        function getCategory($age)
        {
            if ($age >= 18) {
                echo "<br>Adult";
            } else {
                echo "<br>Minor";
            }
        }
        getGrade(52);
        getCategory(17);
        ?>
    </div>

    <div class="part7">
        <!-- Part 7: Strings
        Convert the student's name to uppercase and display it.
        Example:
        ALI -->

        <?php
        $name = 'Ali';
        $uppercase = strtoupper($name);
        echo "$uppercase";
        ?>
    </div>

    <div class="part8">
        <!-- Part 8: Forms
        Create an HTML form that accepts the following input:
        • Name
        • Age
        • Percentage
        After the form is submitted, generate the Student Result Card using the entered data. -->
        <h2>Forms</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="name">Student Name:</label>
                <input type="text" name="name">
            </div>
            <div class="form-group">
                <label for="age">Student Age:</label>
                <input type="number" name="age">
            </div>
            <div class="form-group">
                <label for="percentage">Percentage:</label>
                <input type="text" name="percentage">
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $percentage = $_POST['percentage'];

            echo $name . '<br>';
            getGrade($percentage);
            getCategory($age);
        }
        ?>

    </div>
    <div class="part9">
        <!-- Part 9: Superglobals
        Use the following PHP superglobals to process the form:
        • $_POST
        • $_SERVER['REQUEST_METHOD']
        Receive the form data and display the generated result card. -->

        <?php
        if ($_SERVER['REQUEST_METHOD']) {
            $supername = $_POST['name'];
            $superage = $_POST['age'];
            $superpercentage = $_POST['percentage'];
            echo $supername . '<br>';

            getGrade($superpercentage);
            getCategory($superage);
        }
        ?>

    </div>
    <div class="part10">
        <!-- Part 10: Sessions
        Store the student's name in a session.
        If the session exists, display:
        Session Active : Yes -->
        <?php
        session_start();
        $_SESSION['student-name'] = $_POST['name'];
        if (isset($_SESSION['student-name'])) {
            echo "Session Active : Yes";
        }
        ?>

    </div>
    <div class="part11">
        <!-- Part 11: Cookies
        Create a cookie named:
        username
        Store the student's name in the cookie for 1 day.
        If the cookie exists, display:
        Welcome Cookie : Yes
        Otherwise, display:
        Welcome Cookie : No -->
        <?php
        $cookie_name = "username";
        $cookie_value = $_POST['name'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 1));
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>cookies</title>
        </head>

        <body>
            <?php
            if (isset($_COOKIE[$cookie_name])) {
                echo "Welcome Cookie : Yes";
            } else {
                echo "Welcome Cookie : No";
            }
            ?>
        </body>

        </html>


    </div>
</body>

</html>