<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $db_name = "leafvillage";
    $conn = new mysqli($server_name , $username , $password , $db_name);
    if($conn -> connect_error){
        die("Database connection failed".$conn ->connect_error);
    }
?>