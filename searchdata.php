<?php
// require_once('dbconnect.php');
// $empId = $_POST['postempId'];
// $empName = $_POST['postempName'];
// $empLName = $_POST['postempLName'];

// $sql = "SELECT * FROM EMPLOYEE WHERE EMPLOYEE_ID = '$empId'";
// mysqli_query($conn, $sql);
// mysqli_close($conn);
// header("location: index.php")

//next example will insert new conversation

//next eample will change status of specific conversation to resolve

//http://localhost:8080/Employeelist

// ------------------------ response PUT ok!
// $service_url = 'https://example.com/api/conversations/cid123/status';
// $ch = curl_init($service_url);
 
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
// $data = array("status" => 'R');
// curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
// $response = curl_exec($ch);
// if ($response === false) {
//     $info = curl_getinfo($ch);
//     curl_close($ch);
//     die('error occured during curl exec. Additioanl info: ' . var_export($info));
// }
// curl_close($ch);
// $decoded = json_decode($response);
// if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
//     die('error occured: ' . $decoded->response->errormessage);
// }
// echo 'response ok!';
// var_export($decoded->response);


 // ------------------------ response GET

 //next example will recieve all messages for specific conversation

// $service_url = 'http://localhost:8080/Employeelist';
// $curl = curl_init($service_url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// $curl_response = curl_exec($curl);
// // if ($curl_response === false) {
//     $info = curl_getinfo($curl);
// //     curl_close($curl);
// //     die('error occured during curl exec. Additioanl info: ' . var_export($info));
// // }
// // curl_close($curl);
// // $decoded = json_decode($curl_response);
// // if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
// //     die('error occured: ' . $decoded->response->errormessage);
// // }
// echo 'response ok! ' .$curl;
// // var_export($decoded->response);

 // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/Employeelist");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch); 
echo $output;
// foreach ($output as $row) {
//     $data[] = $row;
// }

// echo json_encode($data, JSON_UNESCAPED_UNICODE);


?>