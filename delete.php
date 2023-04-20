<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $Rollno = $_GET['id'];

    $sql = "DELETE FROM student WHERE Rollno='$Rollno'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>