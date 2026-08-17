<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    echo "Database Connected Successfully";
} else {
    echo "Error " . mysqli_connect_error();
}
?>