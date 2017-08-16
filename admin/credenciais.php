<?php
   $my_host = "localhost";
   $my_login = "wellingtondellam";
   $my_password = "";
   $my_db = "meusfilmes";
   
   $conn = new mysqli($my_host, $my_login, $my_password, $my_db);
   if ($conn->connect_error) die($conn->connect_error);
?>
