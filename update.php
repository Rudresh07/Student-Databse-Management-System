<?php 

include "config.php";

if (isset($_GET['id'])) {

    $Rollno = $_GET['id']; 

    $sql = "SELECT * FROM student WHERE Rollno='$Rollno'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['F_name'];

            $lastname = $row['L_name'];

            $degree = $row['Degree'];

            $gender = $row['Gender'];

            $Rollno = $row['Rollno'];
        } 

    if (isset($_POST['update'])) {

        $firstname = $_POST['firstname'];

        $lastname = $_POST['lastname'];

        $degree = $_POST['degree'];

        $gender = $_POST['gender']; 

        $sql = "UPDATE student SET F_name='$firstname',L_name='$lastname',Degree='$degree',Gender='$gender' WHERE Rollno='$Rollno'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 



    ?>
    <!DOCTYPE html>

<html>

<head>
</head>
<body>



        <h2>Student Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            First name:<br>

            <input type="text" name="firstname" value="<?php echo $first_name; ?>">

            <br>

            Last name:<br>

            <input type="text" name="lastname" value="<?php echo $lastname; ?>">

            <br>

            Degree:<br>

            <input type="text" name="degree" value="<?php echo $degree; ?>">

            <br>

            Gender:<br>

            <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male

            <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

          
          
        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: display.php');

    } 

}

?> 