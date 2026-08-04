/* 
please create a form with three -four input fields. Implement it using both the GET and POST methods, 
print the submitted data, and use the isset() condition to check whether the form has been submitted.
*/



<form method="get" action="">
      Name: <input type="text" name="fname"><br>
      Age: <input type="number" name="age"><br>
      City: <input type="text" name="city"><br>
      <input type="submit" name="submit">
  </form>
  <?php

  if (isset($_GET['submit'])) {
      echo "Form has been successfully submitted!";
  }

  $name = $_GET['fname'];
  $age = $_GET['age'];
  $city = $_GET['city'];
  echo $name;
  echo $age;
  echo $city;
  ?>


  <form method="post" action="">
      Name: <input type="text" name="fname"><br>
      Age: <input type="number" name="age"><br>
      City: <input type="text" name="city"><br>
      <input type="submit">
  </form>
  <?php
  if (isset($_POST['submit'])) {
      echo "Form has been successfully submitted!";
  }

  $name = $_POST['fname'];
  $age = $_POST['age'];
  $city = $_POST['city'];
  echo $name;
  echo $age;
  echo $city;
  ?>
