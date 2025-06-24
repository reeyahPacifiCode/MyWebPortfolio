<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $conn->real_escape_string($_POST['name']);
  $email = $conn->real_escape_string($_POST['email']);
  $message = $conn->real_escape_string($_POST['message']);

  $sql = "INSERT INTO inquiries (name, email, message) VALUES ('$name', '$email', '$message')";
  
  if ($conn->query($sql) === TRUE) {
    echo "Thank you! Your inquiry has been sent.";
  } else {
    echo "Error: " . $conn->error;
  }
  
  $conn->close();
}
?>
