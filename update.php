<?php 

include "db_connect.php";

    if (isset($_POST['update'])) {

        $studentname = $_POST['name'];

        $student_id = $_POST['student_id'];

        $age = $_POST['age'];

        $phone_no =$_POST['phone_no'];

        $reg_no = $_POST['reg_no'];

        $course = $_POST['course'];

        $email = $_POST['email']; 

        $sql = "UPDATE `student` SET `Name`='$studentname',`Age`='$age',`Phone_no`='$phone_no', `Reg_no`= '$reg_no',`Course`='$course',`Email`='$email' WHERE `id`='$student_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $student_id = $_GET['id']; 

    $sql = "SELECT * FROM `student` WHERE `id`='$student_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $studentname = $row['Name'];

            $age = $row['Age'];

            $phone_no  = $row['Phone_no'];

            $reg_no = $row['Reg_no'];

            $course = $row['Course'];

            $email = $row['Email'];

            $id = $row['id'];

        } 

    ?>

        <h2>Student Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            Student name:<br>

            <input type="text" name="name" value="<?php echo $studentname; ?>">

            <input type="hidden" name="student_id" value="<?php echo $id; ?>">

            <br>

           Age:<br>

            <input type="text" name="age" value="<?php echo $age; ?>">

            <br>

            

            Phone_no:<br>

            <input type="tel" name="phone_no" value="<?php echo $phone_no; ?>">

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

        header('Location: view.php');

    } 

}

?> 