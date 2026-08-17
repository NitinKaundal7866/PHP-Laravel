<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: request.php");
    exit();
}
if (isset($_POST['button']) && $_POST['button'] == "logout") {
    session_unset();
    session_destroy();
    header("Location: request.php");
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
    <h2> Welcome to Form Redirect Page</h2>
    <?php echo $_SESSION['username']; ?><br>
     <form method="post">
        <button name="button" value="logout">Log-out</button>
    </form>
</body>
</html>