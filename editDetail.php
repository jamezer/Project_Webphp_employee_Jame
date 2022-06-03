<?php
require_once('dbconnect.php');
$postData = $_POST['postData'];

$sql = "SELECT EMPLOYEE_ID ,FIRST_NAME, LAST_NAME, ADD_BY,
        FROM EMPLOYEE 
        WHERE EMPLOYEE_ID = '$postData'";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("location: index.php")

?>