<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h1>
    Welcome Back!
    <?php echo $_SESSION['username']; ?>
</h1>

<form action="logout.php" method="post">

    <button type="submit" name="button" value="logout">
        Logout
    </button>

</form>

</body>
</html>