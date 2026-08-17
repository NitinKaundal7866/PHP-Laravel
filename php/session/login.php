<?php
session_start();

if (isset($_POST['button']) && $_POST['button'] == 'login') {

    $_SESSION['username'] = $_POST['username'];

    header("Location: welcome.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="username" placeholder="Enter user name" required>
        <br>
        <input type="password" name="password" placeholder="Enter password" required>
        <br>
        <br>
        <button name="button" value="login">Login</button>
    </form>
</body>

</html>