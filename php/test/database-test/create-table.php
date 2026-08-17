<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Error " . mysqli_connect_error();
}

$sql = "CREATE TABLE students(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL, 
email VARCHAR(50),
phone INT(10),
course VARCHAR(30),
city VARCHAR(30)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Created Successfully";
} else {
    echo "Error Creating database " . mysqli_error($conn);
}

mysqli_close($conn);
?>