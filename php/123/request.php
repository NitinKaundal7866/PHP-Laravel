<?php
session_start();
if (isset($_POST['button']) && $_POST['button'] == 'login') {
    $_SESSION['username'] = $_POST['username'];
    header("Location: redirect.php");
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
        <input type="text" name="username"><br>
        <button value="login" name="button">submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['username'];
        if (isset($name)) {
            echo "$name";
        } else {
            echo "Empty Username";
        }
    }
    ?>

</body>

</html>