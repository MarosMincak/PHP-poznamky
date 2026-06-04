<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  /*
  Vytvor jeden PHP súbor, ktorý zobrazí registračný formulár s poľami: 
  meno, email, heslo a potvrdenie hesla.
  Po odoslaní formulára skontroluj, či sú všetky polia vyplnené a či sa heslá zhodujú.
  Ak nastane chyba, vypíš konkrétnu chybovú hlášku.
  */

  ?>

  <form method="post">
    <label for="meno">Meno: </label>
    <input type="text" name="meno">

    <label for="email">Email: </label>
    <input type="email" name="email">

    <label for="heslo">Heslo: </label>
    <input type="password" name="heslo">

    <label for="opakovane_heslo">Zopakuj heslo: </label>
    <input type="password" name="opakovane_heslo">

    <input type="submit" name="btn" value="Pošli ma">
  </form>

  <?php 
  if(isset($_POST["btn"])){
    if(empty($_POST["meno"])){
       echo "Prázdne meno!";
    }
    if(empty($_POST["email"])){
      echo "Prázdny email!";
    }
    if(empty($_POST["heslo"])){
      echo "Prázdne heslo!";
    }
    if($_POST["heslo"] != $_POST["opakovane_heslo"]){
      echo "Hesla sa nezhodujú";
    }else{
      echo "meno " . $_POST["meno"] . " email " . $_POST["email"];
    }
    
  }

  ?>
</body>
</html>