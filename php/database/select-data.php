<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("connection failed " . mysqli_connect_error());
}
$sql = "DELETE FROM myDB WHERE id='4'";
if(mysqli_query($conn, $sql)){
    echo "deleted<br><br>";
}



$sql = "SELECT id, firstname, lastname FROM myDB WHERE lastname='kkk' ORDER BY firstname DESC";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " --Name: " . $row["firstname"] . " --Lastname: " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 Result";
}


$sql2 = "UPDATE myDB SET lastname='kkk' WHERE id=6";
if(mysqli_query($conn, $sql2)){
    echo "Updated Successfully.";
}
mysqli_close($conn);

?>