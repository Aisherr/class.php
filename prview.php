<?php 

include "db_connect.php";

$sql = "SELECT * FROM parent"; 

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

        <h2>Parent's Information</h2>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>Parent_name</th>

        <th>Contact</th>

        <th>Residence</th>

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

                    <td><?php echo $row['Parent_name']; ?></td>

                    <td><?php echo $row['Contact']; ?></td>

                    <td><?php echo $row['Residence']; ?></td>

                    <td><a class="btn btn-info" href="updatep.php">EDIT</a>&nbsp;<a class="btn btn-danger" href="deletep.php">DELETE</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>