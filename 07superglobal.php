<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  // Globálne premenné
  $meno = "Jozef";

  // Lokálna premenná
  function vypisMeno($meno) {
    $priezvisko = "Mrkvička";
    echo "Meno  a Priezvisko z funkcie: " . $meno . " " . $priezvisko;
  }

  //vypisMeno();

  //echo "Priezvisko mimo funkcie: " . $priezvisko;

  // Superglobálne premenné
  /*
  Superglobálna premenná je dostupná v rámci celého skriptu, 
  vrátane funkcií.

  Superglobálna premenná je špeciálne pole,
  ktoré PHP naplní automaticky
  */

  // štandardná premenná
  $vek = 20;
  echo $vek . "<br>";

  // Super globálna premmenná 
  echo "Názov servera: " . $_SERVER['SERVER_NAME'] . "<br>";
  echo "IP klienta: " . $_SERVER['REMOTE_ADDR'] . "<br>";
  echo "Použitý súbor: " . $_SERVER['PHP_SELF'] . "<br>";

  // Globálna premenná $_GET

  echo $_GET['skola'] . " " . $_GET['trieda'] . "<br>";


  ?>
</body>
</html>