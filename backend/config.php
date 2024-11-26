<?php

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'alislahf_lost_and_found');
define('DB_PASS', 'lost_and_found@123');
define('DB_NAME', 'alislahf_lost_and_found');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
