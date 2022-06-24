<?php
$Logusername = $_POST['postLogusername'];
$Logpassword = $_POST['postLogpassword'];

// API URL
$url = 'http://localhost:8080/EmployeeCheckLogin';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data = array(
    'username' => "$Logusername",
    'password' => "$Logpassword"
);
$payload = json_encode($data);
// $payload = json_encode(array("user" => $data));

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

// echo $result;
$arr = json_decode($result, true);

if ($arr["status"] == "LoginSuccess00") {
    session_start();
    $_SESSION['username'] = 'LoginSuccess';
    // echo "Loginpass";
} else {
    $_SESSION['username'] = '';
    // echo "Loginfail";
}
echo $result;

// Close cURL resource
curl_close($ch);

// echo $payload;
?>