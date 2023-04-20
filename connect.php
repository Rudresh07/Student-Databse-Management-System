<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$degree = $_POST['degree'];
$gender = $_POST['gender'];
$rollno = $_POST['rollno'];
$year = $_POST['year'];
$dept = $_POST['dept'];
$advisor = $_POST['advisor'];


//connection code

$conn = new mysqli('localhost','root','','iiitbh');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into student(F_name,L_name,Year,Gender,Rollno,Dept_no,Degree,Advisor) values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssisisss", $fname, $lname, $year, $gender, $rollno, $dept, $degree, $advisor);
    $stmt->execute();
    echo "Data Submitted Successfully...";
    
    $stmt->close();
    $conn->close();
}
?>

