<?php
// db_config.php

$servername = "localhost";
$username = "root"; // Default MySQL username (change if different)
$password = "root"; // Default MySQL password (change if different)
$dbname = "brew_haven"; // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
