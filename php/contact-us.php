<?php
include "connection.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare and bind, agar format yang masuk ke database sesuai terhindar dari SQL injection
    $stmt = $conn->prepare("INSERT INTO user_message (first_name, last_name, email, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $message);

    // Execute the statement
    if ($stmt->execute()) {
        // Display JavaScript alert and redirect
        echo "<script>alert('Message has been sent!'); window.location.href='../page-index.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Close prepared statement
$stmt->close();
// Close database connection
$conn->close();
?>
