<?php 

include "db_connect.php";

$sql = "SELECT * FROM student"; 

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Student's Information</h2>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>Name</th>

        <th>Age</th>

        <th>Phone_no</th>

        <th>Reg_no</th>

        <th>Course</th>

        <th>Email</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['Name']; ?></td>

                    <td><?php echo $row['Age']; ?></td>

                    <td><?php echo $row['Phone_no']; ?></td>

                    <td><?php echo $row['Reg_no']; ?></td>

                    <td><?php echo $row['Course'];?></td>

                    <td><?php echo $row['Email'];?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">EDIT</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">DELETE</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>