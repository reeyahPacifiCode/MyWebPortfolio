<?php
include 'db.php'; // make sure this file connects to your MySQL database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $date    = $_POST['date'];
    $time    = $_POST['time'];
    $message = $_POST['message'];

    // Basic validation
    if (empty($name) || empty($email) || empty($date) || empty($time)) {
        echo "Please fill in all required fields.";
        exit;
    }

    // Prepare and insert
    $stmt = $conn->prepare("INSERT INTO appointments (name, email, phone, date, time, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $date, $time, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Appointment booked successfully!'); window.location.href='condo1.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}


?>
