<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter User Name">
        <br>
        <input type="text" name="password" placeholder="Enter User password">
        <br>
        <br>
        <button name="button" value="set">Set Session</button>
        <br>
        <br>
        <button name="button" value="get">Get Session</button>
        <br>
        <br>
        <button name="button" value="delete">Delete Session</button>
    </form>
    <?php
    if (isset($_POST['button'])) {
        if ($_POST['button'] == "set") {
            $val = $_POST['user'] . $_POST['password'];
            $_SESSION['user'] = $val;
            $_SESSION['password'] = $val;
        }

        if ($_POST['button'] == "get") {
            echo $_SESSION['user'];
        }

        if ($_POST['button'] == "delete") {
            session_destroy();
        }
    }

    ?>
</body>

</html>