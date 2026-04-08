<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "authDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["register"])){
  //echo $_POST["username"] . $_POST["password"];
  $username = $_POST["username"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $sql = "INSERT INTO user (username, pass) 
  VALUES ('$username', '$password')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

?>

<body>
  <form method="post">
    <div class="container">
      <h2>Register</h2>
      <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Name</label>
        <input name="username" type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button name="register" type="submit" class="btn btn-primary">Register</button>
      <a href="login.php">Login</a>
    </div>

  </form>
</body>

</html>