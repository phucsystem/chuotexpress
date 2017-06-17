<?php

$db_server = "localhost";
$db_user_name = "root";
$db_password = "123456";
$db_name = "chuotexpress";

// Create connection
$conn = new mysqli($db_server, $db_user_name, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
