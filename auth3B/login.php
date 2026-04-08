<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "authDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

if (isset($_POST["submit"])) {

  while ($row = mysqli_fetch_assoc($result)) {
    if ($_POST["username"] == $row["username"]) {

      if (password_verify($_POST["password"], $row["pass"])) {

        setcookie("auth", true, time() + 3600, "/");
        header("Location: logout.php");
        exit();

      } else {
        echo "<div class='alert alert-danger'>Zlé heslo!</div>";
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>
  <form method="POST">
    <div class="container mt-5">
      <h2>Login</h2>

      <div class="mb-3">
        <label class="form-label">Username</label>
        <input name="username" type="text" class="form-control">
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input name="password" type="password" class="form-control">
      </div>

      <button name="submit" type="submit" class="btn btn-primary">Login</button>
      <a href='register.php' class="ms-2">Register</a>
      <a href='forgot-password.php' class="ms-2">Forgot password</a>
    </div>
  </form>
</body>
</html>