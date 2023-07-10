<?php 

include "db_connect.php";

    if (isset($_POST['update'])) {

        $parentname = $_POST['Parent_name'];

        $parent_id = $_POST['Id'];

        $contact= $_POST['Contact'];

        $residence =$_POST['Residence'];

        $sql = "UPDATE `parent` SET `Parent_name`='$parentname',`Contact`='$contact',`Residence`='$residence' WHERE `Id`='$parent_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['Id'])) {

    $parent_id = $_GET['Id']; 

    $sql = "SELECT * FROM `parent` WHERE `Id`='$parent_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $parentname = $row['Parent_name'];

            $contact = $row['Contact'];

            $residence  = $row['Residence'];

            $id = $row['Id'];

        } 

    ?>

        <h2>Parents Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Parents information:</legend>

            Parent name:<br>

            <input type="text" name="name" value="<?php echo $parentname; ?>">

            <input type="hidden" name="parent_id" value="<?php echo $id; ?>">

            <br>

          Contact:<br>

            <input type="tel" name="contact" value="<?php echo $contact; ?>">

            <br>

            

           Residence<br>

            <input type="text" name="residence" value="<?php echo $residence; ?>">

            <br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: prview.php');

    } 

}

?> 