<?php
// submit_contact.php

// Include database configuration
include('db_config.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare SQL query to insert data into the database
    $sql = "INSERT INTO contact_messages (name, email, message) 
            VALUES ('$name', '$email', '$message')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Message successfully sent!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
