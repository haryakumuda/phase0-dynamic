<?php
include "connection.php";

// Fetching user input
$email = $_POST['login-email'];
$password = $_POST['login-password'];

// SQL query to check if email exists and password matches
$sql = "SELECT * FROM user WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password == $row['password']) {
        // Password correct, redirect to index.html
        header("Location: ../page-index.php?login=${$row['last_name']}");
        exit();
    } else {
        // Password incorrect
        header("Location: ../page-login.php?error=password");
        exit();
    }
} else {
    // Email not found
    header("Location: ../page-login.php?error=email");
    exit();
}

$conn->close();
?>
