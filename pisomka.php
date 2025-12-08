<?php

//1 príklad
function najvacsieCislo($a, $b, $c){
  if($a>$b && $a>$c){
    echo $a;
  }elseif($b>$a && $b>$c){
    echo $b;
  }else{
    echo $c;
  }

}
najvacsieCislo(2,4,7);

// 2 príklad
/*
Funkcia je blok kódu, 
ktorý sa môže opakovať volaním danej funkcie.ä

Parameter funkcie je hodnota, 
ktorá vstupuje do funkcie.

Návratová hodnota je hodnota, 
ktorú funkcia vráti po jej dokončení
*/

// príklad 3.
/*
for - je cyklus, ktorý obsahuje podmienku.
while - je cyklus, ktorý sa nemusí vykonať ani 1x.
do while - je cyklus, ktorý sa vykoná vždy aspoň 1x.
foreach - cyklus, ktorý perchádza cez pole.
*/

//Príklad 4.
for($i = 0; $i <= 10; $i++){
  echo $i;
}

// Prílkad 5. 

function nasobeniePola($pole){
  $vysledok = 1;
  foreach($pole as $p){
    $vysledok *= $p;
  }

  return $vysledok;
}

echo nasobeniePola([2,4,6,1]);


// Vytvorte funkciu, ktorá spočíta 3 argumenty funkcie.
function spocitajCisla($prveCislo, $druheCislo, $tretieCislo){
  $vysledok = $prveCislo + $druheCislo + $tretieCislo;
  echo $vysledok;
}

spocitajCisla(4,7,1);

// Vytvorte funkciu, ktorá vypíše každé párne číslo od 0 po 100.

function kazdeParne(){
  for($i = 0; $i <= 100; $i++){
    if($i % 2 == 0){ 
      echo $i . " ";
    }
  }
}
kazdeParne();

// Vytvorte funkciu, ktorá vypíše všetky čísla z poľa 
// (náhodne 30 generovaných čísel), 
// ktoré sú deliteľné číslom 3 a zároveň číslom 5.

function delitelneCislami(){
  echo "<br>";
  echo "<hr>";
  $pole = [];

  for($i = 0; $i < 30; $i++){
    $pole[$i] = random_int(0,100);
    if($pole[$i] % 3 == 0 && $pole[$i] % 5 == 0){
      echo $pole[$i] . " "; //0, 15, 30, 45 ...
    }
  }
}

delitelneCislami();


/*
Vytvorte funkciu, ktorá odčíta všetky 
čísla v poli (argument funkcie) a vypíše 
výslednú absolútnu hodnotu.
*/


function odcitaniePola($pole){
  echo "<br>";
  echo "<hr>";
  $vysledok = 0;

  foreach($pole as $cislo){
    $vysledok = $vysledok - $cislo;
    // 0 = 0 - 2 = -2
    // -2 = -2 - 10 = -12
    // -12 = -12 - 6 = -18 ...
  }
  echo abs($vysledok);
}

// 2 - 10 - 6 - 2 - 3 - 84 - 5 = -108 = +112
odcitaniePola([2, 10, 6, 2, 3, 84, 5]); 
?>