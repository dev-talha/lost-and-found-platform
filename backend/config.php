<?php

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'user-name');
define('DB_PASS', 'password');
define('DB_NAME', 'databasename');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
