<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("connection failed " . mysqli_connect_error());
}

$sql = "INSERT INTO myDB (firstname,lastname,email)
VALUES ('kk','k','kk123@gmail.com')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created. Last inserted id:". $last_id;
} else {
    echo "Error" . mysqli_error($conn);
}

mysqli_close($conn);
