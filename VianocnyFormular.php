<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  p{
      overflow: hidden; 
      white-space: nowrap;
      display: inline;
  }
</style>
<body>
  <form method="post">
    <input type="number" name="vyska" placeholder="Výška stromu">
    <input type="submit" value="Zobraz stromček">
  </form>

  <?php
  if(isset($_POST["vyska"])){
    $vyska = $_POST["vyska"];
  }else{
    $vyska = 0;
  }
  
  ?>
<pre>
<?php
$vyskaKmena = $vyska / 2;
$sirkaKmena = $vyska / 2;             
$pocetHviezdiciek = ($vyska * $vyska) - 1;


/*
     △
    ***   3
   *****  5
  ******* 7
    ||
    ||

*/

// Každý riadok 
for($i = 1; $i <= $vyska; $i++){
  // Každá medzera
  for($j = $vyska - $i; $j > 0; $j--){
    echo " ";
  }

  // Každá hviezdička
  for($k = 1; $k <= (2 * $i) - 1; $k++){
    if($i == 1 && $k == 1){
      echo "<p style='color:red;' >△</p>";
    }else{
      if(random_int(1, 4) == 1){
        echo "<p style='color:blue;' >o</p>";
      }else{
        echo "<p style='color:green;' >*</p>";
      }
      
    }
  }
echo "<br>";
}

//Kmeň stromu
for($i = 1; $i <= $vyskaKmena / 2; $i++){
  // Každá medzera
  for($j = $vyskaKmena; $j > 0; $j--){
    echo " "; 
  }

  // Každý oddelovač
  for($j = $sirkaKmena; $j > 0; $j--){
    echo "|";
  }
  echo "<br>";
}
?>
</pre>
</body>
</html>