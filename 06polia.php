<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP – Polia</title>
</head>
<body>
<?php
// ==============================================
// POLIA
// ==============================================
//
// Pole je premenná, ktorá si vie uchovať viac hodnôt.
// Namiesto viacerých premenných použijeme jednu s viacerými prvkami.
//

// ----------------------------------------------
// 1) INDEXOVANÉ (číselné) pole
// ----------------------------------------------
$mena = ["Juraj", "Štefan", "Gregor"];

// Pridanie prvku na koniec (automatický index)
$mena[] = "Maroš";

// Čítanie podľa indexu (indexy začínajú od 0)
echo $mena[3] . "<br>";   // Maroš

// Zmena hodnoty na konkrétnom indexe
$mena[1] = "Katarína";
echo $mena[1] . "<br>";   // Katarína

echo "<br>";

// ----------------------------------------------
// 2) ASOCIATÍVNE POLE (kľúč => hodnota)
// ----------------------------------------------
$student = [
  "meno"  => "Eva",
  "vek"   => 16,
  "mesto" => "Poprad"
];

echo $student["meno"] . "<br>"; // Eva

// Úprava existujúcej hodnoty (neprepisujeme celé pole)
$student["vek"] = 17;
echo $student["vek"] . "<br>";  // 17

// Doplnenie novej položky
$student["priezvisko"] = "Hrubá";
echo $student["priezvisko"] . "<br>"; // Hrubá

echo "<br>";

// ----------------------------------------------
// 3) VIACROZMERNÉ POLE (pole polí)
// ----------------------------------------------
$zamestnanci = [
  ["meno" => "Anna",  "vek" => 34],
  ["meno" => "Jozef", "vek" => 28],
  ["meno" => "Marek", "vek" => 21]
];

// Čítanie + zmena vnútri poľa
echo $zamestnanci[1]["meno"] . "<br>"; // Jozef
$zamestnanci[1]["meno"] = "Tomáš";
echo $zamestnanci[1]["meno"] . "<br>"; // Tomáš

echo "<br>";

// ----------------------------------------------
// 4) FOREACH – prechádzanie poľa
// ----------------------------------------------
$ovocie = ["jablko", "paradajka", "pomaranč", "melón", "banán"];

foreach ($ovocie as $o) {
  echo "Ovocie: " . $o . "<br>";
}

echo "<br>";

foreach ($zamestnanci as $zamestnanec) {
  echo "Zamestnanec: " . $zamestnanec["meno"] . "<br>";
}

echo "<br>";

// ----------------------------------------------
// 5) UŽITOČNÉ FUNKCIE PRE POLIA
// ----------------------------------------------
$zelenina = ["kaleráb", "mrkva", "baklažán", "zemiak"];

// Počet prvkov
echo "Počet prvkov: " . count($zelenina) . "<br>";

// Vloží hodnotu na koniec poľa
array_push($zelenina, "hrach");

// Vyberie poslednú hodnotu z poľa
array_pop($zelenina);

// Skontroluje, či hodnota v poli je
if (in_array("mrkva", $zelenina)) {
  echo "mrkva je v poli zelenina<br>";
}

// Zoradenie vzostupne (abecedne) – mení pôvodné pole
sort($zelenina);

// Vypíšeme po zoradení
foreach ($zelenina as $z) {
  echo $z . "<br>";
}

echo "<br>";

// ----------------------------------------------
// DOMÁCA ÚLOHA – priemer čísel
// ----------------------------------------------
// Funkcia, ktorá vypočíta priemer hodnôt v poli (očakávame 10 náhodných čísel)
function priemerCisel($poleCisel) {
  $suma = 0;

  foreach ($poleCisel as $cislo) {
    $suma = $suma + $cislo;
  }

  // count($poleCisel) vráti počet prvkov
  $priemer = $suma / count($poleCisel);
  echo "Priemer je: " . $priemer . "<br>";
}

// Vytvoríme pole 10 náhodných čísel (1–100) a zavoláme funkciu
$nahodne = [];
for ($i = 0; $i < 10; $i++) {
  $nahodne[] = rand(1, 100);
}

priemerCisel($nahodne);

?>
</body>
</html>
