<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("connection failed " . mysqli_connect_error());
} 

$sql = "CREATE TABLE MyDb (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "table created";
} else {
    echo "Error" . mysqli_error($conn);
}

mysqli_close($conn);
?>
