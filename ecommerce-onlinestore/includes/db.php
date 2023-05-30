<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "shoponline_db";

// Create connection

$con = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()){
    echo "Failed to connect to database!";
    exit();
}
//echo "Connection successful!";
