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

$znaky = ["♦","♥","♠","♣"];

$mojeKarty = [];
$dealeroveKarty = [];

function generateCards(){
  global $znaky, $karty;
  $randomKarta = array_rand($karty, 1);
  $randomZnak = $znaky[random_int(0, count($znaky) - 1)];

  $karta = $randomKarta . $randomZnak;
  return $karta;
}
 




