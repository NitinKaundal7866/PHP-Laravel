<?php
session_start();

if(isset($_POST['button']) && $_POST['button']=="login"){

    $_SESSION['username'] = $_POST['username'];

    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<form method="post">

    <input
        type="text"
        name="username"
        placeholder="Enter Username"
        required
    >

    <br><br>

    <input
        type="password"
        name="password"
        placeholder="Enter Password"
        required
    >

    <br><br>

    <button type="submit" name="button" value="login">
        Login
    </button>

</form>

</body>
</html>