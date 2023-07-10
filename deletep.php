<?php 

include "db_connect.php"; 

if (isset($_GET['Id'])) {

    $parent_id = $_GET['Id'];

    $sql = "DELETE FROM `parent` WHERE `Id`='$parent_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>



