<?php
$host = 'localhost';
$user = 'your_db_user';
$pass = 'your_db_password';
$db   = 'colleges_db';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}
?> 