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

$sql = "ALTER TABLE `user` CHANGE `pass` `pass` VARCHAR(101) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL;";

if (mysqli_query($conn, $sql)) {
  echo "DB Opravená";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>



