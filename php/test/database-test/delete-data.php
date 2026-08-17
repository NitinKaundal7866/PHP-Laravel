<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 9 — Delete Data Using a Form</title>
</head>

<body>

    <form action="" method="post">
        <label for="id">Enter Student ID: </label>
        <input type="number" name="id" required>
        <input type="submit" name="delete_student" value="Delete Student">
    </form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "college_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection Error " . mysqli_connect_error());
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_student'])) {
        $id  = $_POST['id'];

        $sql = "DELETE FROM students WHERE id = '$id'";

        $result = mysqli_prepare($conn, $sql);

        if (mysqli_stmt_affected_rows($result) > 0) {
            echo "Student Deleted Successfully";
        } else {
            echo "Student Not Found";
        }

        mysqli_close($conn);
    }

    ?>
</body>

</html>