<?php
$deptname = $_POST['deptname'];
$deptid = $_POST['deptid'];
$hod = $_POST['hod'];
$phone = $_POST['phone'];


//connection code

$conn = new mysqli('localhost','root','','iiitbh');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into department(Dept_id,Dept_name,Hod,Phone) values(?,?,?,?)");
    $stmt->bind_param("sssi", $deptid, $deptname, $hod, $phone);
    $stmt->execute();
    echo "Data Submitted Successfully...";
    $stmt->close();
    $conn->close();
}
?>