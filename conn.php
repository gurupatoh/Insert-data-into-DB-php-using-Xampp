<?php


//var_dump($conn);

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "last_name-first_name";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}