<?php
$host = 'localhost';
$dbname = 'user_login_system';
$username = 'root';
$password = '';

// Create connection using MySQLi
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
