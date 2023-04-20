<?php 

include "config.php";

$sql = "SELECT * FROM student";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<style>
        body{
            background-color: powderblue;
        }
    </style>

</head>

<body>

    <div class="container">

        <h2>Student Detail</h2>
        <button onclick="window.location.href = 'student.html';" style="background-color:black; border-radius: 5px; color:white">Add Another</button>

<table class="table">

    <thead>

        <tr>

        <th>Roll no.</th>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Degree</th>

        <th>Gender</th>

        <th>Advisor</th>

        <th>Dept no.</th>

        <th>Year</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>


                    <td><?php echo $row['Rollno']; ?></td>

                    <td><?php echo $row['F_name']; ?></td>

                    <td><?php echo $row['L_name']; ?></td>

                    <td><?php echo $row['Degree']; ?></td>

                    <td><?php echo $row['Gender']; ?></td>

                    <td><?php echo $row['Advisor']; ?></td>

                    <td><?php echo $row['Dept_no']; ?></td>
                    
                    <td><?php echo $row['Year']; ?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['Rollno']; ?>">
                    Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['Rollno']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>