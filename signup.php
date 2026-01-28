<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "healthcare_db");
if ($conn->connect_error) {
    die("Database connection failed");
}

$username = $_POST['username'];
$password = $_POST['password'];
$confirm  = $_POST['confirm_password'];

if ($password !== $confirm) {
    echo "<script>alert('Passwords do not match'); window.history.back();</script>";
    exit();
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// check user already exists
$check = $conn->prepare("SELECT id FROM users WHERE username=?");
$check->bind_param("s", $username);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "<script>alert('Username already exists'); window.history.back();</script>";
    exit();
}

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashedPassword);

if ($stmt->execute()) {
    echo "<script>
        alert('Account created successfully');
        window.location.href='editprofile2.php';
    </script>";
} else {
    echo "Error";
}
?>
