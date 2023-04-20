<?php
$empid = $_POST['empid'];
$name = $_POST['name'];
$deptno = $_POST['deptno'];
$gender = $_POST['gender'];


//connection code

$conn = new mysqli('localhost','root','','iiitbh');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into professor(Empid,Ename,Dept_no,Gender) values(?,?,?,?)");
    $stmt->bind_param("isis", $empid, $name, $deptno, $gender);
    $stmt->execute();
    echo "Data Submitted Successfully...";
    $stmt->close();
    $conn->close();
}
?>