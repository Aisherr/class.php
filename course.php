<?php 
include "db_connect.php";

  if (isset($_POST['submit'])) {

    $name = $_POST['Course_name'];
    $fee = $_POST['Course_fee'];     
    $duration = $_POST['Duration'];
  

    $sql ="INSERT INTO `course`( `Course_name`, `Course_fee`, `Duration`)
    VALUES ('$name','$fee','$duration')";

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

<h2> Course Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Courses:</legend>

    Course name:<br>

    <input type="text" name="Course_name">

    <br>

    Courses Fee:<br>

    <input type="number" name="Course_fee">

    <br>

    Course Duration:<br>

    <input type="text" name="Duration">

    <br><br>


    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>
