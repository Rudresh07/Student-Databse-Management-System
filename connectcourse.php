<?php
$courseid = $_POST['courseid'];
$credit = $_POST['credit'];
$deptno = $_POST['deptno'];
$coursename= $_POST['coursename'];



//connection code

$conn = new mysqli('localhost','root','','iiitbh');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into course(Course_id,Credit,Dept_no,C_name) values(?,?,?,?)");
    $stmt->bind_param("ssis",$courseid, $credit, $deptno,$coursename);
    $stmt->execute();
    echo "Data Submitted Successfully...";
    $stmt->close();
    $conn->close();
}
?>