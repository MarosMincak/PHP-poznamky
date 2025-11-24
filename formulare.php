<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=q, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="get">
    <label for="meno">Meno: </label>
    <input type="text" name="meno">
    <input type="text" name="priezvisko">
    <input type="submit" value="Odoslať">
  </form>
  <?php
  if(isset($_GET["meno"]) && isset($_GET["priezvisko"])){
    echo $_GET["meno"] . " " . $_GET["priezvisko"];
  }

  ?>
</body>
</html>