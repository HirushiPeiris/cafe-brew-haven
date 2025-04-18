<?php
// submit_reservation.php

// Include database configuration
include('db_config.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $name = $_POST['name'];
    $reservation_date = $_POST['reservation_date'];
    $reservation_time = $_POST['reservation_time'];
    $guests = $_POST['guests'];

    // Prepare SQL query to insert data into the database
    $sql = "INSERT INTO reservations (name, reservation_date, reservation_time, guests) 
            VALUES ('$name', '$reservation_date', '$reservation_time', '$guests')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Reservation successfully submitted!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
