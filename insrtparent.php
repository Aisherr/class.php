<?php 
include "db_connect.php";

  if (isset($_POST['submit'])) {

    $parent_name = $_POST['Parent_name'];
    $contact = $_POST['Contact'];     
    $residence = $_POST['Residence'];
  

    $sql = "INSERT INTO `parent`(`Parent_name`, `Contact`, `Residence`) 
    VALUES ('$parent_name','$contact','$residence')";

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

<h2> Parent's Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Parent's information:</legend>

    Parent name:<br>

    <input type="text" name="Parent_name">

    <br>

    Contact:<br>

    <input type="tel" name="Contact">

    <br>

    Residence:<br>

    <input type="text" name="Residence">

    <br><br>


    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>