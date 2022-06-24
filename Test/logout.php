<?php
   session_start();
   unset($_SESSION["username"]);
   // unset($_SESSION["password"]);
   
   echo 'Logout Compleat';
   header('Refresh: 2; URL = http://localhost/Project_Employee/login.php');
?>