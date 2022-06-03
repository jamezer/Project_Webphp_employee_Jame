<?php
require_once('dbconnect.php');
$postData = $_POST['postData'];

$sql = "DELETE FROM EMPLOYEE WHERE EMPLOYEE_ID = '$postData'";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("location: index.php")

?>