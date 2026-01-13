<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post">
    <input type="text" name="meno">
    <input type="submit" value="Pošli ma preč">
  </form>

  <hr>

  <form method="post">
    <input type="number" name="cislo1">
    <input type="number" name="cislo2">
    <input type="submit" value="sčítaj čísielka">
  </form>

  <hr>

  <form method="post">
    <input type="number" name="faktorial">
    <input type="submit" value="Vyrátaj faktoriál">
  </form>

  <hr>

  <form method="post">
    <input type="number" value="<?php echo rand(0, 100); ?>" name="c1">
    <input type="number" value="<?php echo rand(0, 100); ?>" name="c2">
    <input type="number" value="<?php echo rand(0, 100); ?>" name="c3">
    <input type="submit" value="Vyrátaj maximálnu hodnotu">
  </form>

  <hr>

  <form method="post">
    <input type="number" name="number1">
    <input type="number" name="number2">
    <input type="number" name="number3">
    <input type="submit" value="Vypíš všetky čísla">
  </form>
</body>

</html>

<?php
session_start();

// ÚLOHA 1
if (isset($_POST["meno"])) {
  echo $_POST["meno"];
}

// ÚLOHA 2
$vysledok = 0;
if (isset($_POST["cislo1"]) && isset($_POST["cislo2"])) {
  $cislo1 = $_POST["cislo1"];
  $cislo2 = $_POST["cislo2"];
  $vysledok = $cislo1 + $cislo2;

  echo $vysledok;
}

// ÚLOHA 3
// 7 -> 7 * 6 * 5 * 4 * 3 * 2 * 1 = x
function faktorial($cisloUzivatela)
{
  $vysledokFaktorialu = 1;

  $faktorial = $cisloUzivatela;

    for ($i = $faktorial; $i >= 1; $i--) {
      $vysledokFaktorialu = $vysledokFaktorialu * $i;

      // 1 = 1 * 7 (7)
      // 7 = 7 * 6 (42)
    }
    echo $vysledokFaktorialu;
  }


if(isset($_POST["faktorial"])){
  faktorial($_POST["faktorial"]);
}

// ÚLOHA 4
if(isset($_POST["c1"]) && isset($_POST["c2"]) && isset($_POST["c3"])){
  $c1 = $_POST["c1"];
  $c2 = $_POST["c2"];
  $c3 = $_POST["c3"];

  mojMax($c1, $c2, $c3);
  //echo max($c1, $c2, $c3);
}

function mojMax($a, $b, $c){
  if($a > $b && $a > $c){
    echo $a;
  }else if($b > $a && $b > $c){
    echo $b;
  }else if($c > $a && $c > $b){
    echo $c;
  }else{
    echo "rovnaké";
  }
}

// Úloha 5
// 2 10 3  -> 2, 5, 8
function vypisCisla($prveCislo, $druheCislo, $krok){
  for($i = $prveCislo; $i <= $druheCislo; $i = $i + $krok){
    echo $i . " ";
  }
}

// vypisCisla(5,10,2);
if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["number3"])){
  vypisCisla($_POST["number1"], $_POST["number2"], $_POST["number3"]);
}

//Pro Verzia
/*
Každým stlačením tlačidla sa pridá hodnota 
do poľa hodnôt a toto pole sa následne vypíše


*/








/*
// ÚLOHA 3
Majme číselný vstup od 0 po 10.
Po stalčení tlačidla sa vykoná 
faktoriál daného čísla.
Následne sa vypíše výsledok

PRO verzia: vytvorte funkciu
faktorial(parameter) ktorá bude príjimať
číslo ako argument funkcie (zadané cez input)
*/

// ÚLOHA 4
/*
3 číselné inputy - náhodne generované čísla <0,100>, 
zistite max. hodnotu a vypíšte ju. 

PRO verzia: vytvorte funkciu mojMax(arg, arg, arg)

*/

// ÚLOHA 5
/*
Vytvorte funkciu, ktorá vypíše všetky čísla z
inputu 1 po input 2 s krokom input 3.

5, 15, 3 -> 5, 8, 11, 14
5, 15, 1 -> 5, 6, 7, 8 ... 
*/

?>