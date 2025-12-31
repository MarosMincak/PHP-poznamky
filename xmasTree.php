<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<pre>
<?php

  $vyska = 15;
  $kmenVyska = $vyska / 3;
  $kmenSirka = $vyska / 3;
  for ($i = 1; $i <= $vyska; $i++) {
    for($j = 1; $j <= $vyska - $i; $j++){
      echo " ";
    }

    for ($k = 1; $k <= (2 * $i - 1); $k++) {
      echo "*";
    }
    echo "<br>";
  }
  for($i=0; $i <= $vyska; $i++){
    for($j = 1; $j <= $vyska; $j++){
      echo " ";
    }
    for ($k = 1; $k <= $kmenSirka; $k++) {
      echo "*";
    }
  echo "<br>";
  }


?>

</pre>
</body>
</html>