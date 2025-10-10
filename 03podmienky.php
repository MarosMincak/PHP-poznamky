<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP – Podmienky</title>
</head>
<body>
<?php
// ==============================================
// PODMIENKY (if, elseif, else)
// ==============================================
// Podmienka je výraz, ktorý sa vyhodnotí na true (pravda) alebo false (nepravda).
// Základný tvar:
//
// if (podmienka) {
//   // vykoná sa, ak je podmienka pravdivá
// } elseif (ďalšia_podmienka) {
//   // vykoná sa, ak prvá neplatí a táto je pravdivá
// } else {
//   // vykoná sa, ak nič vyššie neplatí
// }

// 1) Jednoduché porovnanie
if (10 < 20) {
  echo "10 je menej ako 20<br>";
} else {
  echo "10 je viac alebo rovné 20<br>";
}

// 2) Pravdivosť čísel v podmienke
$cislo = 5;
if ($cislo) { // neberieme nové pojmy: stačí vedieť, že 0 je „nepravda“, iné čísla „pravda“
  echo "Premenná \$cislo má hodnotu (nie je 0 ani null)<br>";
}

// 3) if / elseif / else s náhodným číslom
$nahodne_cislo = rand(0, 10); // celé číslo 0 až 10
echo "Náhodné číslo: $nahodne_cislo<br>";

if ($nahodne_cislo > 5) {
  echo "Číslo je > 5<br>";
} elseif ($nahodne_cislo == 5) {
  echo "Číslo je == 5<br>";
} else {
  echo "Číslo je < 5 alebo 0–4<br>";
}

// ==============================================
// DOMÁCA ÚLOHA (jednoduché zadanie + ukážkové riešenie)
// ==============================================
//
// Zadanie:
// - Vygeneruj 3 čísla v rozsahu 1–3 (vrátane).
// - Do premennej $guess si daj vlastný tip (tiež tri čísla 1–3).
// - Ak sa tvoj tip presne zhoduje s vygenerovanými číslami v rovnakom poradí, vypíš "Super!".
// - Inak vypíš "Niektoré číslo je iné".
//
// Pozn.: použijeme pole a porovnáme ho s == (stačí nám porovnanie hodnôt a poradia).

echo "<br><strong>Domáca úloha – ukážka</strong><br>";

$cislo1 = rand(1, 3);
$cislo2 = rand(1, 3);
$cislo3 = rand(1, 3);

$generovane = [$cislo1, $cislo2, $cislo3];

// Tu si študent doplní svoj tip:
$guess = [1, 2, 3]; // napr. zmeň na svoje čísla 1–3

echo "Vygenerované: [" . $generovane[0] . ", " . $generovane[1] . ", " . $generovane[2] . "]<br>";
echo "Tvoj tip:     [" . $guess[0] . ", " . $guess[1] . ", " . $guess[2] . "]<br>";

if ($generovane == $guess) {
  echo "Super!<br>";
} else {
  echo "Niektoré číslo je iné.<br>";
}

?>
</body>
</html>
