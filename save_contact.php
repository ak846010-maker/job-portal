<?php
// Database connection
$host = "localhost";
$user = "root";
$password = ""; // set your DB password
$database = "jobportal";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO contact_messages (name, mobile, email, message) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $mobile, $email, $message);

if ($stmt->execute()) {
    echo "<script>alert('Message sent successfully!'); window.location.href='Contact-Us.php';</script>";
} else {
    echo "<script>alert('Something went wrong. Please try again.'); window.location.href='Contact-Us.php';</script>";
}

$stmt->close();
$conn->close();
?>
