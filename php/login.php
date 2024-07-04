<?php
include "connection.php";

// Fetching user input
$email = $_POST['login-email'];
$password = $_POST['login-password'];

    // Prepare and bind, agar format yang masuk ke database sesuai terhindar dari SQL injection
$stmt = $conn->prepare("SELECT * FROM user WHERE email=?");
$stmt->bind_param("s", $email); // Bind the email parameter

// Execute the statement
$stmt->execute();
$result = $stmt->get_result(); // Menambil hasil query

// Jika query dapat data
if ($result->num_rows > 0) {
    // User with given email found in the database
    $row = $result->fetch_assoc();

    // Verify password
    if ($password == $row['password']) {
        // Password correct, redirect ke index dan membawa param url dengan value last name -- tidak jadi dipakai
        header("Location: ../page-index.php?login={$row['last_name']}");
    } else {
        // Password incorrect, redirect back to login page with error message
        header("Location: ../page-login.php?error=password");
    }
} else {
    // Email not found in the database, redirect back to login page with error message
    header("Location: ../page-login.php?error=email");
}

// Close prepared statement and database connection
$stmt->close();
$conn->close();
?>
