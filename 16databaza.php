<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <input type="text" name="meno">
    <input type="text" name="priezvisko">
    <input type="number" name="vek">
    <input type="submit" value="Stlač ma">
  </form>
  <?php
  // Pripojenie k DB
  $meno = "";
  $priezvisko = "";
  $vek = 0;
  $conn = mysqli_connect("localhost", "root", "root", "test");

  if(!$conn){
    die("Nepodarilo sa pripojiť k DB");
  }else{
    echo("HOORAY! Pripojené k DB");
  }

  //INSERT (Vloženie dát)
  if(isset($_POST["meno"]) && isset($_POST["priezvisko"]) && isset($_POST["vek"])){
    $meno = $_POST["meno"];
    $priezvisko = $_POST["priezvisko"];
    $vek = $_POST["vek"];

    $sqlInsert = "INSERT INTO student(ID, meno, priezvisko, vek) 
    VALUES(NULL, '$meno', '$priezvisko', '$vek')";
    mysqli_query($conn, $sqlInsert);

    echo "<br>";
  }




  // SELECT (Zobrazenie dát)
  $sql = "SELECT * FROM student";
  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_assoc($result)){
    echo $row['ID'] . " " . $row['meno']  . " " . $row['priezvisko'] .  " " . $row['vek'] . " " . "<br>";
    
  }
  ?>
</body>
</html>