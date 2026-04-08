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

// Vyberie všetky dáta z DB. 
$sql = "SELECT * FROM user";

//spustí SQL príkaz napísaný vyššie a vráti výsledok (objekt)
$result = mysqli_query($conn, $sql);

// Vypíše všetky mená užívateľov z databázy user
while($row = mysqli_fetch_assoc($result)){
  echo $row["username"] . " " . $row["pass"] . "<br>";
}
?>