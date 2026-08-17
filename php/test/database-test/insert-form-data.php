<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 4 — Insert Data Using an HTML Form</title>
</head>

<body>
    <h2>Insert Data</h2>
    <form action="" method="post">
        <label for="name">Student Name </label>
        <input type="text" name="name" required><br>
        <label for="email">Email </label>
        <input type="email" name="email" required><br>
        <label for="phone">Phone </label>
        <input type="number" name="phone"><br>
        <label for="course">Course </label>
        <input type="text" name="course" required><br>
        <label for="name">City </label>
        <input type="text" name="city" required><br><br>
        <input type="submit" name="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "college_db";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            echo "Error " . mysqli_connect_error();
        }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $course = $_POST['course'];
        $city  = $_POST['city'];

        $sql = "INSERT INTO students (name, email, phone, course, city) 
            VALUES ('$name', '$email', '$phone', '$course', '$city')";

        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            echo "Student Added Successfully.<br><br>". "Your Student ID is: " . $last_id;
        } else {
            echo "Error executing query: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>
</body>

</html>