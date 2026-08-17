<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Error " . mysqli_connect_error());
}

$sort_option = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'nameaz';

switch ($sort_option) {
    case 'nameza':
        $order_by = "name DESC";
        break;
    case 'idasc':
        $order_by = "id ASC";
        break;
    case 'iddes':
        $order_by = "id DESC";
        break;
    case 'nameaz':
    default:
        $order_by = "name ASC";
        break;
}

$sql = "SELECT id , name, email, city, course, phone FROM students ORDER BY $order_by";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 8 — Use the ORDER BY Clause</title>
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
    <form method="GET" action="">
        <label for="students">Sort By:</label>
        <select name="sort_by" id="students" onchange="this.form.submit()">
            <option value="nameaz" <?php if ($sort_option == 'nameaz') echo 'selected'; ?>>Name A-Z</option>
            <option value="nameza" <?php if ($sort_option == 'nameza') echo 'selected'; ?>>Name Z-A</option>
            <option value="idasc" <?php if ($sort_option == 'idasc') echo 'selected'; ?>>ID Ascending</option>
            <option value="iddes" <?php if ($sort_option == 'iddes') echo 'selected'; ?>>ID Descending</option>
        </select>
    </form>
    <br><br>
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
            if ($result && mysqli_num_rows($result) > 0) {
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