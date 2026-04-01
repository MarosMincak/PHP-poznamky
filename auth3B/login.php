<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
  echo $row["username"];
}

$_COOKIE["auth"] == false;

if(isset($_POST["submit"])){
  if($_POST["username"] == $username && $_POST["password"] == $password){
    setcookie("auth", true, time() + 3600);
  }
}

if($_COOKIE["auth"] == true){
  echo "You're logged!";
}
?>

<body>
  <form method="POST">
    <div class="container">
      <h2>Login</h2>
      <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Username</label>
        <input name="username" type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button name="submit" type="submit" class="btn btn-primary">Login</button>

      <?php
        if(!$_COOKIE["auth"]){
          echo "<a href='register.php'>Register</a>
                <a href='forgot-password.php'>Forgot password</a>";
        }
      ?>

    </div>
  </form>
</body>

</html>