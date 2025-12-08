<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <input type="submit" name="rozdaj" value="Rozdaj">
  </form>
</body>
</html>
<?php
$karty = [
  "2"  => 2,
  "3"  => 3,
  "4"  => 4,
  "5"  => 5,
  "6"  => 6,
  "7"  => 7,
  "8"  => 8,
  "9"  => 9,
  "10"  => 10,
  "J"  => 10,
  "Q"  => 10,
  "K"  => 10,
  "A"  => 11,
];

$znaky = ["♦", "♥", "♠", "♣"]; 

$mojeKarty = [];
$dealeroveKarty = [];

function generateCards()
{
  global $znaky, $karty;
  $randomKarta = array_rand($karty, 1);
  $randomZnak = $znaky[random_int(0, count($znaky) - 1)];

  $karta = $randomKarta . $randomZnak;
  return $karta;
}

// Generovanie prvej karty pre dealera
array_push($dealeroveKarty, generateCards());

// Generovanie prvej karty pre mňa
array_push($mojeKarty, generateCards());

// Generovanie druhej karty pre mňa
array_push($mojeKarty, generateCards());


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["rozdaj"])){
  rozdajKarty($dealeroveKarty);
  echo "<br>";
  rozdajKarty($mojeKarty);
}

function rozdajKarty($karty){
  if(!empty($karty)){
    echo "<h1>Karty: </h1>" ;
    foreach($karty as $karta){
      echo "<h2>" . $karta . " " . "</h2>";
    }
  }else{
    return;
  }
}