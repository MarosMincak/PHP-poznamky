<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP – Cykly</title>
</head>
<body>
<?php
// ==============================================
// CYKLY – for, while, do...while, foreach
// ==============================================
//
// Cyklus je časť kódu, ktorá sa opakuje, kým platí určitá podmienka.
// Pomáha nám vykonať rovnakú činnosť viackrát bez zbytočného opakovania kódu.
//

// ----------------------------------------------
// 1) FOR
// ----------------------------------------------
// Používame, keď vieme, koľkokrát sa má cyklus opakovať.
//
// Štruktúra:
// for (začiatok; podmienka; krok) { ... }

echo "<h2>FOR cyklus</h2>";

for ($i = 0; $i < 10; $i++) {
  if ($i == 0) {
    echo "Ahoj";
  } else {
    echo " Ahoj";
  }
}

echo "<br><br>";

// ----------------------------------------------
// 2) WHILE
// ----------------------------------------------
// Vykonáva sa dovtedy, kým platí podmienka.
// Najprv sa overí podmienka, potom sa kód vykoná.

echo "<h2>WHILE cyklus</h2>";

$x = 0;
while ($x < 10) {
  echo "Nazdar ";
  $x++;
}

echo "<br><br>";

// ----------------------------------------------
// 3) DO...WHILE
// ----------------------------------------------
// Najprv sa vykoná telo cyklu a až potom sa kontroluje podmienka.
// Cyklus sa teda vykoná aspoň raz.

echo "<h2>DO...WHILE cyklus</h2>";

$y = 0;
do {
  echo "Čauko ";
  $y++;
} while ($y < 10);

echo "<br><br>";

// ----------------------------------------------
// 4) FOREACH
// ----------------------------------------------
// Používa sa na prechádzanie (čítanie) všetkých prvkov poľa.

echo "<h2>FOREACH cyklus</h2>";

$mena = ["Jana", "Peter", "Marek", "Eva"];

foreach ($mena as $meno) {
  echo "$meno<br>";
}

//Zadanie 1 – Párne a nepárne čísla
/*
Použi cyklus for, ktorý prejde čísla od 1 do 10.
Pomocou if zisti, ktoré čísla sú párne a ktoré nepárne.
Každé číslo vypíš na nový riadok so slovom „párne“ alebo „nepárne“.
*/

//Zadanie 2 – Súčet čísel od 1 do 100
/*
Pomocou while cyklu vypočítaj súčet všetkých čísel od 1 po 100
a nakoniec vypíš výsledok.
*/

//Zadanie 3 – Náhodné číslo (hra tipovania)
/*
Pomocou rand(1,10) vygeneruj tajné číslo.
Použi if / elseif / else, aby si porovnal svoj tip ($moj_tip) s týmto číslom.
Ak sa trafíš → „Trafené!“,
ak je tvoj tip menší → „Tipol si príliš malé číslo“,
ak väčší → „Tipol si príliš veľké číslo“.
*/

// ----------------------------------------------
// KONIEC LEKCIE
// ----------------------------------------------
?>
</body>
</html>
