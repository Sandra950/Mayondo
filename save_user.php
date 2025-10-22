<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // default XAMPP user
$password = "";     // leave blank unless you set one
$dbname = "sandra"; // ✅ your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if form data is set
if (isset($_POST['fullname'], $_POST['email'], $_POST['username'], $_POST['password'])) {

  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // secure password

  // Insert into database
  $sql = "INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $fullname, $email, $username, $password);

  if ($stmt->execute()) {
    echo "<script>alert('✅ Account created successfully!'); window.location='login.html';</script>";
  } else {
    echo "<script>alert('❌ Error: Could not save user.'); window.history.back();</script>";
  }

  $stmt->close();
} else {
  echo "<script>alert('❌ Missing form data!'); window.history.back();</script>";
}

$conn->close();
?>
