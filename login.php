<?php
session_start();
require 'db/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = hash('sha256', $_POST['password']);

  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows === 1) {
    $_SESSION['user'] = $username;
    header("Location: dashboard.php");
    exit();
  } else {
    $error = "Invalid credentials!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login - Kuberganga</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <h2>Login</h2>
  <form method="POST">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
  </form>
  <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>