<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2> Get Form</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="name"><br>
        Age: <input type="number" name="age"><br>
        City: <input type="text" name="city"><br>
        <input type="submit" name="submit_POST">
    </form>

    <?php
   
      
    
     if (isset($_POST['submit_POST'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "City: " . $city;

        
    }
 
    ?>

 
</body>

</html>