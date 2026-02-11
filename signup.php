<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* ---------- DATABASE CONNECTION ---------- */
$conn = new mysqli("localhost", "root", "", "healthcare_db");
if ($conn->connect_error) {
    die("Database connection failed");   // PART D: die()
}

/* ---------- CLEAN INPUT USING STRING FUNCTIONS ---------- */
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$confirm  = trim($_POST['confirm_password']);

/* ---------- FORMAT USERNAME ---------- */
$username = strtolower($username);   // handle case sensitivity
$username = ucfirst($username);      // proper format

/* ---------- VALIDATION ---------- */
if (strlen($username) < 4) {
    die("Username must be at least 4 characters");
}

/* ---------- PASSWORD STRENGTH VALIDATION ---------- */
if (strlen($password) < 8) {
    die("Password must be at least 8 characters long");
}

if (!preg_match('/[A-Z]/', $password)) {
    die("Password must contain at least one capital letter");
}

if (!preg_match('/[a-z]/', $password)) {
    die("Password must contain at least one small letter");
}

if (!preg_match('/[0-9]/', $password)) {
    die("Password must contain at least one number");
}

if (!preg_match('/[\W_]/', $password)) {
    die("Password must contain at least one special character");
}

/* ---------- STRING COMPARISON ---------- */
if (strcmp($password, $confirm) !== 0) {
    die("Passwords do not match");
}

/* ---------- HASH PASSWORD ---------- */
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

/* ---------- CHECK IF USER EXISTS ---------- */
$check = $conn->prepare("SELECT id FROM users WHERE username = ?");
$check->bind_param("s", $username);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    print "Username already exists";   // PART D: print()
    die();
}

/* ---------- INSERT USER ---------- */
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashedPassword);

if ($stmt->execute()) {
    echo "Account created successfully<br>";  // PART D: echo()
    echo "Redirecting to login page...";
    header("refresh:2; url=signin.php");
} else {
    die("Something went wrong");
}

$stmt->close();
$check->close();
$conn->close();
?>
