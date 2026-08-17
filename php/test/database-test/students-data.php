<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Error " . mysqli_connect_error());
}

$sql = "SELECT id , name, email, city, course, phone FROM students";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 6 — Select and Display Data</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h2>Students Data</h2>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["course"] . "</td>";
                    echo "<td>" . $row["city"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td>0 results.</td></tr>";
            }

            ?>
        </tbody>
    </table>
</body>

</html>
<?php
mysqli_close($conn);
?>