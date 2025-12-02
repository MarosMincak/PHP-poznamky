<?php
// Predvyplnenie formulára náhodnými číslami v rozsahu 0 – 100
$nahCislo1 = rand(0, 100);
$nahCislo2 = rand(0, 100);
$nahCislo3 = rand(0, 100);
?>
  <!-- Formulár na zadanie/odoslanie troch čísiel a získanie ich maxima -->
  <form method="post">
    <label for="cislo1"> Číslo 1: </label>
    <input type="number" value="<?php echo $nahCislo1; ?>" name="cislo1">

    <label for="cislo2"> Číslo 2: </label>
    <input type="number" value="<?php echo  $nahCislo2; ?>" name="cislo2">

    <label for="cislo3"> Číslo 3: </label>
    <input type="number" value="<?php echo $nahCislo3; ?>" name="cislo3">

    <input type="submit" name="getMax" value="Odošli">
  </form>

  <!-- Formulár na vymazanie doposiaľ uložených hodnôt v session -->
  <form action="" method="POST">
    <input type="submit" name="destroyBtn" value="Zmaž hodnoty">
  </form>
<?php 
// Spustenie session pre uloženie histórie vypočítaných maxím
session_start();

// Inicializácia poľa v session pri prvom načítaní stránky
if(!isset($_SESSION["poleMax"])){
  $_SESSION["poleMax"] = [];
}

// Spracovanie odoslaného formulára: nájdenie maxima a jeho uloženie
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["getMax"])){
  $cislo1 = $_POST["cislo1"];
  $cislo2 = $_POST["cislo2"];
  $cislo3 = $_POST["cislo3"];
  
  $maxValue = max($cislo1, $cislo2, $cislo3);

  $_SESSION["poleMax"][] = $maxValue;

  $lastValue = end($_SESSION["poleMax"]);

  // Výpis zoznamu všetkých nájdených maxím vo formáte [a, b, c]
  echo "[";
  for($i = 0; $i < count($_SESSION["poleMax"]); $i++){
    if($lastValue != $_SESSION["poleMax"][$i]){
      echo $_SESSION["poleMax"][$i] . ", ";
    }else{
      echo $_SESSION["poleMax"][$i];
    }
    
  }
  echo "]";
}

// Vymazanie uložených údajov a ukončenie session
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["destroyBtn"])){
  session_destroy();
}
?>