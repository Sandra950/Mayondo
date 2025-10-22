<?php
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "sandra");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get login data safely
$username = trim($_POST['username']);
$password = trim($_POST['password']);

// Prevent empty fields
if (empty($username) || empty($password)) {
    echo "<script>alert('Please fill in all fields!'); window.history.back();</script>";
    exit;
}

// Fetch user by username
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // ✅ If password is hashed in DB
    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php");
        exit;
    }
    // ⚠️ If passwords are still plain text (temporary fallback)
    elseif ($password === $user['password']) {
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php");
        exit;
    } else {
        echo "<script>alert('Incorrect password!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('User not found!'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
