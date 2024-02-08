<?php
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $dbname = "db23_120";
    $conn = new mysqli($servername,$username,$password);
    $conn->select_db($dbname);
    if(!$conn){
       echo "connection failed: " ;
    } 


?>