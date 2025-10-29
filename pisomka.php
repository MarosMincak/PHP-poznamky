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

?>