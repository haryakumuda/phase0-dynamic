<?php
include "connection.php";

// Get form data
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if email already exists
$sql = "SELECT * FROM user WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Email already registered
    header("Location: ../page-login.php?error=email_exists");
    exit();
} else {
    // Email not registered, proceed with insertion
    $stmt->close();

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO user (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
        // Redirect to a success page or login page
        header("Location: ../page-index.php?login=${last_name}"); // Make sure you create this file
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Close connections
$stmt->close();
$conn->close();
?>
