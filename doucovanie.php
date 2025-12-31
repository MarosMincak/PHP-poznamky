<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <input type="number" name="cislo1">
    <input type="number" name="cislo2">
    <input type="submit" name="tlacidlo" value="odošli">
  </form>

  <form method="post">
    <input type="number" name="faktorial">
    <input type="submit" name="faktorialButton" value="odošli">
  </form>
  <?php
  // 1 uloha: vypísať všetky čísla v rozmedzí 
  // od prvého argumentu po druhý argument vo funkcii

  if(isset($_POST["tlacidlo"])){
    if(isset($_POST["cislo1"]) && isset($_POST["cislo2"])){
      $cislo1 = $_POST["cislo1"];
      $cislo2 = $_POST["cislo2"];

      vypisRozmedzie($cislo1, $cislo2);
    }
  }

  function vypisRozmedzie($cislo1, $cislo2){
      for($i = $cislo1; $i <= $cislo2; $i++){
        echo $i. " ";
      }
    }
  
  // Faktorial:
  if(isset($_POST["faktorialButton"])){
    if(isset($_POST["faktorial"])){
      $fakt = $_POST["faktorial"];
      faktorial($fakt);
    }
  }

  // 5! -> 5 * 4 * 3 * 2 * 1  = 120
  function faktorial($fakt){
    $vysledok = 1;

    for($i = $fakt; $i > 1; $i--){
      $vysledok = $vysledok * $i;
    }
    echo $vysledok;
  }

  // Uloha 1. na precvičenie:
  // Vytvorte funkciu ktorá vypíše 
  // všetky nepárne čísla od 0 po 100.

  // Uloha 2. na precvičenie:
  // načítajte náhodné číslo a 
  // vypíšte delitele čísla
  // Napr.: 8 -> 1, 2, 4, 8

  // Uloha 3 na precvičenie:
  // Nájdite jedno číslo, ktoré sa do poľa nehodí
  // Číslo sa nehodí do poľa vtedy, keď je len 
  // jedno párne medzi ostatnými nepárnymi.
  // alebo 
  // Číslo sa nehodí do poľa vtedy, keď je len 
  // jedno nepárne medzi ostatnými párnymi.
  // Vašou úlohou je vypísať práve tú hodnotu z poľa
  // ktorá sa do poľa nehodí.

  // [10, 8, 15, 4, 2] -> 15
  // [7, 3, 1, 7, 53, 6, 99] -> 6

  $pole[] = array(10, 8, 15, 4, 2);

  // najdiNevhodne($pole)
  ?>
  
</body>
</html>