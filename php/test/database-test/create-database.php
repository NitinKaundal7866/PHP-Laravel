<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    echo "Error " . mysqli_connect_error();
}

$sql = "CREATE DATABASE college_db";

if (mysqli_query($conn, $sql)) {
    echo "Database Created Successfully";
} else {
    echo "Error Creating database " . mysqli_error($conn);
}

mysqli_close($conn);
?>