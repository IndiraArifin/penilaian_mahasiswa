<?php
session_start();
include 'koneksi.php'; 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$checkQuery = "SELECT * FROM users WHERE username = ? OR email = ?";
$checkStmt = $conn->prepare($checkQuery);
if ($checkStmt === false) {
    die('MySQL prepare error: ' . $conn->error);
}
$checkStmt->bind_param("ss", $username, $email);
$checkStmt->execute();
$checkResult = $checkStmt->get_result();

if ($checkResult->num_rows > 0) {
    echo "Username or email already exists.";
} else {
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $insertQuery = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $insertStmt = $conn->prepare($insertQuery);
    if ($insertStmt === false) {
        die('MySQL prepare error: ' . $conn->error);
    }
    $insertStmt->bind_param("sss", $username, $passwordHash, $email);
    $insertStmt->execute();

    if ($insertStmt->affected_rows === 1) {
        echo '<script>
                alert("Registration successful. You can now login.");
                window.location.href = "login.php";
              </script>';
    } else {
        echo "Registration failed. Please try again.";
    }
}

$checkStmt->close();
$insertStmt->close();
$conn->close();
?>