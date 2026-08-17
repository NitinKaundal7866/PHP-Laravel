<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
if (isset($_POST['button']) && $_POST['button'] == "logout") {
    session_unset();
    session_destroy();
    header("Location: login.php");
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
    <h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
    <form method="post">
        <button name="button" value="logout">Log-out</button>
    </form>
</body>

</html>