<?php

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $db_name = "leafvillage";
    // $conn = new mysqli($servername, $username, $password, $db_name);

    // if ($conn->connect_error) { 
    //     die("connection failed ! ". $conn->connect_error);
    // }
    // // echo"Connection successful";

   
// Database connection script

$servername = "localhost";
$username = "root"; // Update this with your database username
$password = ""; // Update this with your database password
$database = "leafvillage"; // Update this with your database name

// Establish a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>