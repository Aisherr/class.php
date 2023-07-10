<?php 

include "db_connect.php";

$sql = "SELECT * FROM course"; 

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

        <h2>Courses Information</h2>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>Course_name</th>

        <th>Course_fee</th>

        <th>Duration</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['Id']; ?></td>

                    <td><?php echo $row['Course_name']; ?></td>

                    <td><?php echo $row['Course_fee']; ?></td>

                    <td><?php echo $row['Duration']; ?></td>

                    <td><a class="btn btn-info" href="updatec.php">EDIT</a>&nbsp;<a class="btn btn-danger" href="deletec.php">DELETE</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>