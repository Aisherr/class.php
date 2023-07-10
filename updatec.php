<?php 

include "db_connect.php";

    if (isset($_POST['update'])) {

        $course_name = $_POST['Course_name'];

        $course_id = $_POST['Course_id'];

        $course_fee = $_POST['Course_fee'];

        $duration =$_POST['Duration']; 

        $sql = "UPDATE `course` SET `Course_name`='$course_name',`Course_fee`='$course_fee',`Duration`='$duration' WHERE `Id`='$course_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $course_id = $_GET['id']; 

    $sql = "SELECT * FROM `course` WHERE `Id`='$course_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $course_name = $row['Course_name'];

            $course_fee = $row['Course_fee'];

            $duration  = $row['Duration'];

            $id = $row['id'];

        } 

    ?>

        <h2>Courses Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Courses information:</legend>

           Course name:<br>

            <input type="text" name="name" value="<?php echo $course_name; ?>">

            <input type="hidden" name="course_id" value="<?php echo $id; ?>">

            <br>

          Course fee:<br>

            <input type="text" name="age" value="<?php echo $course_fee; ?>">

            <br>

            
         Duration:<br>

            <input type="text" name="duration" value="<?php echo $duration; ?>">

            <br>

            Reg_no:<br>

            <input type="text" name="reg_no" value="<?php echo $reg_no; ?>">

            <br>

            Course:<br>

            <input type="text" name="course" value="<?php echo $course; ?>">

            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            <br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: cview.php');

    } 

}

?> 