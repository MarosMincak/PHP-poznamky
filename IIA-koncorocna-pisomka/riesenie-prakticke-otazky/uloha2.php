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
  Vytvor formulár na výpočet ceny objednávky.
   Používateľ zadá názov produktu, počet kusov a cenu za kus.
   Po odoslaní formulára vypočítaj celkovú cenu.
   Ak počet kusov alebo cena nie sú kladné čísla, vypíš chybu.
  */

  ?>

  <form method="post">
    <label for="produkt">Produkt</label>
    <input type="text" name="produkt">

    <label for="pocetks">Počet kusov</label>
    <input type="number" name="pocetks">

    <label for="cenazaks">Cena za ks</label>
    <input type="number" step="0.01" name="cenazaks">

    <input type="submit" name="btn" value="Pošli ma">
  </form>

  <?php 
  $suma = 0;
  if(isset($_POST["btn"])){
    $suma = $_POST["pocetks"] * $_POST["cenazaks"];
    echo "Celková cena objednávky produktu " . $_POST["produkt"] ." je: " . $suma;
  }


  ?>

</body>
</html>