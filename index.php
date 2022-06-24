<?php
ob_start();
   session_start();

   
   echo $_SESSION['username'];
   if ($_SESSION['username'] == "LoginSuccess") {
    header('Location: http://localhost/Project_Employee/usermangement.php');
   } else {
    header('Location: http://localhost/Project_Employee/login.php');
   }
?>