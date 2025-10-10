 
<?php
// ÚVOD DO PHP — rozšírenie len toho, čo sme preberali na úvodnej hodine

// --- Základné pravidlá ---
// V súboroch obsahujúcich iba PHP je bežné vynechať zatvárací tag.

// Komentáre:
// jednoriadkový: // toto je komentár
/*
   blokový komentár
*/

// --- Echo vs. Print ---
// echo: rýchly spôsob na výpis textu (môže prijať viac argumentov)
echo "Ahoj, toto je echo výpis.";
echo "<br>";

// print: funguje podobne, vracia 1 (môže byť použitý v kontexte)
print "Toto je print výpis.";
echo "<br>";

// --- Premenné a pomenovanie ---
// Premenná v PHP začína znakom $ (napr. $x)
$x = 10;           // integer
$y = 3.14;         // float
$meno = "Jana";   // string
$aktivny = true;   // boolean

echo "Premenná x = " . $x . " a meno = " . $meno . "<br>"; // concatenation

// String interpolation (vloženie premennej priamo do reťazca) funguje v dvojitých úvodzovkách
echo "Interpolácia: Meno je $meno a x = $x" . "<br>";

// --- Základné matematické operácie ---
$sucet = $x + 5;
$rozdiel = $x - 2;
echo "Súčet: $sucet, Rozdiel: $rozdiel" . "<br>";

// --- Typy a konverzia ---
echo "Typy: x (int) = ";
var_dump($x); // zobrazí typ aj hodnotu
echo "<br>";

echo "Meno (string) = ";
var_dump($meno);
echo "<br>";

// explicitné pretypovanie (casting)
$floatToInt = (int)$y; // pretypovanie float -> int
echo "Pretypovanie: (int) 3.14 -> " . $floatToInt . "<br>";

// --- Konštanty ---
define('SCHOOL', 'Stredná škola ABC');
echo 'Konštanta SCHOOL = ' . SCHOOL . "<br>";

// --- Ladenie a zobrazenie štruktúr ---
// var_dump: detailný výpis typu a hodnoty
// print_r: čitateľnejší výpis (pre zložitejšie premenné)
echo "var_dump(";
var_dump($aktivny);
echo "<br>print_r(";
print_r($meno);
echo ")<br>";
?>