<?php
require_once('dbconnect.php');
$userName = $_POST['userName'];
$passWord = $_POST['passWord'];
$empId = $_POST['empID'];
$empName = $_POST['empName'];
$LName = $_POST['LName'];
$addBy = $_POST['addBy'];
$date = $_POST['date'];

$sql = "INSERT INTO EMPLOYEE (USERNAME, PASSWORD, EMPLOYEE_ID, FIRST_NAME, LAST_NAME, ISADMIN, ADD_BY, ADD_DATE)
        VALUE ('$userName', '$passWord', '$empId', '$empName', '$LName', '0', '$addBy', '$date')";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("location: index.php")

?>