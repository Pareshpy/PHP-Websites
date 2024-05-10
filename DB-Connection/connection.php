<?php
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