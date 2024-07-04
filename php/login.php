<?php
include "connection.php";

// Fetching user input
$email = $_POST['login-email'];
$password = $_POST['login-password'];

// Prepare SQL statement with a placeholder for the email
$stmt = $conn->prepare("SELECT * FROM user WHERE email=?");
$stmt->bind_param("s", $email); // Bind the email parameter

// Execute the statement
$stmt->execute();
$result = $stmt->get_result(); // Get the result set

if ($result->num_rows > 0) {
    // User with given email found in the database
    $row = $result->fetch_assoc();

    // Verify password
    if ($password == $row['password']) {
        // Password correct, redirect to index.html with last name as parameter
        header("Location: ../page-index.php?login={$row['last_name']}");
        exit();
    } else {
        // Password incorrect, redirect back to login page with error message
        header("Location: ../page-login.php?error=password");
        exit();
    }
} else {
    // Email not found in the database, redirect back to login page with error message
    header("Location: ../page-login.php?error=email");
    exit();
}

// Close prepared statement and database connection
$stmt->close();
$conn->close();
?>
