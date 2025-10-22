<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

// Database connection
$conn = new mysqli("localhost", "root", "", "sandra");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all users
$sql = "SELECT id, fullname, email, username, created_at FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - Mayondo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
      font-family: "Poppins", sans-serif;
    }
    h2 {
      color: #007bff;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
    }
    table {
      background-color: #ffffff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    th {
      background-color: #007bff;
      color: #fff;
      font-weight: 600;
      text-align: center;
    }
    td {
      text-align: center;
      vertical-align: middle;
    }
    .navbar-brand {
      font-size: 1.5rem;
      font-weight: bold;
    }
    .logout-btn {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 6px 15px;
      border-radius: 5px;
      transition: 0.3s;
    }
    .logout-btn:hover {
      background-color: #bb2d3b;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand text-primary" href="#">Mayondo Dashboard</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link active" href="dashboard.php">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="signup.html">Add User</a></li>
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        </ul>
        <a href="logout.php" class="logout-btn">Logout</a>
      </div>
    </div>
  </nav>

  <!-- User Table -->
  <div class="container mt-5">
    <h2>Registered Users</h2>
    <div class="table-responsive">
      <table class="table table-striped table-bordered align-middle">
        <thead>
          <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Created At</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($result && $result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>{$row['id']}</td>
                          <td>{$row['fullname']}</td>
                          <td>{$row['email']}</td>
                          <td>{$row['username']}</td>
                          <td>{$row['created_at']}</td>
                        </tr>";
              }
          } else {
              echo "<tr><td colspan='5' class='text-center text-danger fw-bold'>No users found!</td></tr>";
          }
          $conn->close();
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
