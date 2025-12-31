<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    p{
      overflow: hidden; 
      white-space: nowrap;
      display: inline;
    }
  </style>
<pre>
<?php

  /*
         *      5 medzier, 1 *
        ***     4 medzery, 3 *
       ***o*    3 medzery, 5 *
      *o*****
     ****o**o*
        !!
        !!  
  */


  $vyska = 16;
  $sirkaKmena = $vyska / 3;
  $vyskaKmena = $vyska / 3;
  $pocetGul = ($vyska * $vyska);

  for($i = 1; $i <= $vyska; $i++){

    for($j = $vyska - $i; $j >= 0; $j--){
      echo " ";
    }

    for($k = 1; $k <= (2 * $i) - 1; $k++){
      if($i == 1 && $k == 1){
        echo "<p style='color:red;'>↑</p>";   
      }else{
        if(random_int(1,4) != 1){
          echo "<p style='color:green;'>*</p>";
        }else{
          echo "<p style='color:blue;'>o</p>";
        }
      }
    }
    echo "<br>";
  }

  for($x = 1; $x<= $vyskaKmena; $x++){
    for($i = 0; $i < $sirkaKmena * 2; $i++){
      echo " ";
    }
      for($j = 0; $j < $sirkaKmena * 2; $j++){
      echo "<p style=color:brown>|</p>";
    }
    echo "<br>";
  }


?>
</pre>
</body>
</html>