<?php
$username = $_POST['postusername'];
$password = $_POST['postpassword'];
$employeeId = $_POST['postemployeeId'];
$empFirstName = $_POST['postempFirstName'];
$empLastName = $_POST['postempLastName'];
$isAdmin = $_POST['postisAdmin'];
$addBy = $_POST['postaddBy'];
$addDate = $_POST['postaddDate'];


// $url = "https://localhost:8080/EmployeeInsert";
// $data = <<<DATA
// {
//     "username": "$username",
//     "password": "$password",
//     "employeeId": "$employeeId",
//     "empFirstName": "$empFirstName",
//     "empLastName": "$empLastName",
//     "isAdmin": "$isAdmin",
//     "addBy": "$addBy",
//     "addDate": "$addDate"
//   }
// DATA;



// API URL
$url = 'http://localhost:8080/EmployeeInsert';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data = array(
    'username' => "$username",
    'password' => "$password",
    'employeeId' => "$employeeId",
    'empFirstName' => "$empFirstName",
    'empLastName' => "$empLastName",
    'isAdmin' => "$isAdmin",
    'addBy' => "$addBy",
    'addDate' => "$addDate"
);
$payload = json_encode(array($data));
// $payload = json_encode(array("user" => $data));

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

// Close cURL resource
curl_close($ch);

echo $payload;
?>