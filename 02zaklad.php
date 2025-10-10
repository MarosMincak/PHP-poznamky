<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP – Základy</title>
</head>
<body>
  <?php
  // ==============================================
  // TYPY PREMENNÝCH
  // ==============================================
  /*
    integer – celé čísla (1, 2, 3, 4)
    float – desatinné čísla (1.5, 435.75)
    string – text (reťazec znakov) ("ahoj")
    array – pole [1, 2, 3, 4] alebo ["Ahoj", "Nazdar", "Čau"]
    boolean – pravda/nepravda (true / false)
    NULL – prázdna hodnota (null)
  */

  // Príklady premenných:
  $cislo = 10;          // integer
  $desatinne = 3.14;    // float
  $meno = "Jana";       // string
  $aktivny = true;      // boolean
  $pole = [1, 2, 3];    // array
  $nic = null;          // null

  echo "Premenná cislo: $cislo<br>";
  echo "Meno: $meno<br>";

  // ==============================================
  // PRAVIDLÁ PREMENNÝCH
  // ==============================================
  /*
    - Každá premenná musí začínať znakom $
    - Nesmie začínať číslom (napr. $1meno je nesprávne)
    - PHP rozlišuje malé a veľké písmená
      ($meno a $Meno sú dve rôzne premenné)
    - Hodnota sa priraďuje znakom =
  */

  $meno = "Eva";
  $Meno = "EVA";
  echo "Premenná meno = $meno, a premenná Meno = $Meno<br>";

  // ==============================================
  // OPERÁTORY
  // ==============================================

  // --- Aritmetické operátory ---
  /*
    +  sčítanie
    -  odčítanie
    *  násobenie
    /  delenie
    %  zvyšok po delení
  */

  $a = 10;
  $b = 3;

  echo "Sčítanie: " . ($a + $b) . "<br>";
  echo "Odčítanie: " . ($a - $b) . "<br>";
  echo "Násobenie: " . ($a * $b) . "<br>";
  echo "Delenie: " . ($a / $b) . "<br>";
  echo "Zvyšok po delení: " . ($a % $b) . "<br>";

  // --- Priraďovacie operátory ---
  /*
    =   priradenie hodnoty
    +=  priradenie hodnoty so sčítaním
    -=  priradenie hodnoty s odčítaním
    *=  priradenie hodnoty s násobením
    /=  priradenie hodnoty s delením
    %=  priradenie hodnoty so zvyškom po delení
  */

  $vysledok = 5;
  $vysledok += 3; // rovnaké ako $vysledok = $vysledok + 3
  echo "Výsledok po += 3: $vysledok<br>";

  // --- Porovnávacie operátory ---
  /*
    ==  rovná sa (hodnota)
    !=  nerovná sa (hodnota)
    <   menšie ako
    >   väčšie ako
    <=  menšie alebo rovné
    >=  väčšie alebo rovné
  */

  $x = 5;
  $y = 7;

  echo "x == y: "; var_dump($x == $y); echo "<br>";
  echo "x < y: "; var_dump($x < $y); echo "<br>";
  echo "x > y: "; var_dump($x > $y); echo "<br>";

  // --- Logické operátory ---
  /*
    && alebo and – logické A (AND)
    || alebo or  – logické ALEBO (OR)
    !            – negácia (NOT)

    true && true = true
    true && false = false
    true || false = true
    false || false = false
  */

  $a = true;
  $b = false;

  echo "a && b: "; var_dump($a && $b); echo "<br>";
  echo "a || b: "; var_dump($a || $b); echo "<br>";
  echo "!a: "; var_dump(!$a); echo "<br>";

  ?>
</body>
</html>
