<?php

include "db_connect.php";

  if (isset($_POST['submit'])) {

    $Student_name = $_POST['name'];

    $age =$_POST['age'];

    $phone_no =$_POST['phone_no'];

    $reg_no =$_POST['reg_no'];

    $course =$_POST['course'];
    
    $email = $_POST['email'];

    $sql = "INSERT INTO `student`(`name`, `age`,`phone_no`,`reg_no`,`course` ,`email`) VALUES ('$Student_name','$age','$phone_no','$reg_no','$course','$email')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    Student name:<br>

    <input type="text" name="name">

    <br>

    Age:<br>

    <input type="number" name="age">

    <br>

    Phone_no:<br>

    <input type="tel" name="phone_no">

    <br>

    Reg_no:<br>

    <input type="number" name="reg_no">

    <br>
    Course:<br>

    <input type="text" name="course">

    <br>
    Email:<br>

    <input type="email" name="email">

    <br>

    <br>
    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>