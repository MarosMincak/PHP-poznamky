<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP – Funkcie</title>
</head>
<body>
<?php
// ==============================================
// FUNKCIE
// ==============================================
//
// Funkcia je určitý blok kódu, ktorý má svoje meno
// a môžeme ho použiť viackrát jednoduchým volaním.
// Hlavná výhoda: kód sa neopakuje (zásada DRY – Don't Repeat Yourself)
//

// ----------------------------------------------
// 1) Funkcia bez parametra a bez návratovej hodnoty
// ----------------------------------------------
function nazovFunkcie() {
  echo "Štefan";
}

// volanie funkcie:
nazovFunkcie();
nazovFunkcie();

echo "<br><br>";

// ----------------------------------------------
// 2) Funkcia s parametrami (bez návratovej hodnoty)
// ----------------------------------------------
function scitajArgumenty($cislo1, $cislo2) {
  $vysledok = $cislo1 + $cislo2;
  echo $vysledok;
}

scitajArgumenty(5, 8);

echo "<br><br>";

// ----------------------------------------------
// 3) Funkcia s parametrami a s návratovou hodnotou
// ----------------------------------------------
function vynasobCisla($cislo1, $cislo2) {
  return $cislo1 * $cislo2; // return vráti hodnotu
}

// s návratovou hodnotou sa dá ďalej pracovať:
echo vynasobCisla(10, 3) + 10;

echo "<br><br>";

// ==============================================
// ÚLOHA 1
// ==============================================
// Funkcia, ktorá vypíše všetky nepárne čísla od 1 do 10

function vypisNeparne() {
  for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
      echo $i . " ";
    }
  }
}

vypisNeparne();

echo "<br><br>";

// ==============================================
// ÚLOHA 2
// ==============================================
// Funkcia, ktorá sčíta všetky párne čísla v zadanom rozsahu

function scitajParne($min, $max) {
  $sucet = 0;

  for ($i = $min; $i <= $max; $i++) {
    if ($i % 2 == 0) {
      $sucet = $sucet + $i;
    }
  }

  echo $sucet;
}

scitajParne(2, 7);

echo "<br><br>";

// ==============================================
// 3 ÚLOHY NA PRECVIČENIE
// ==============================================

// 1. Funkcie a cykly
// Vytvor funkciu, ktorá vypíše všetky čísla od 1 do 20,
// ale len tie, ktoré sú deliteľné tromi.


// 2. Funkcie a podmienky
// Vytvor funkciu s názvom skontrolujCislo($cislo),
// ktorá vypíše „pozitívne“, „negatívne“ alebo „nula“ podľa zadanej hodnoty.


// 3. Funkcie, cykly a výpočty
// Vytvor funkciu vypocitajPriemer($min, $max),
// ktorá spočíta aritmetický priemer čísel v danom rozsahu (vrátane),
// a výsledok vráti pomocou return.
// Potom vypíš text: "Priemer čísel od X do Y je Z".

?>
</body>
</html>
