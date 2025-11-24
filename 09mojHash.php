<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="slovo">Zadaj slovo:</label>
        <input type="text" name="slovo">
        <button type="submit">Vytvor hash</button>
    </form>

    <form method="post">
        <label for="slovo">Zadaj hash slovo:</label>
        <input type="text" name="hashSlovo">
        <input type="submit" name="">Odhašuj</button>
    </form>


<?php
    /*
    Vytvorte formulár v ktorom bude možné zadať
    text "Jablko" a vašou úlohou je vymyslieť
    algoritmus, ktorý "zahešuje" toto slovo

    Vstup: Jablko
    Výstup: napr. "a94a8fe5ccb19ba61c
    Výstup2: napr. "alo";
    Výstup3: napr. "J10a1b2l12k11o15"
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $slovo = strtolower($_POST["slovo"]);
        $hash = "";

        $abeceda = [
            'a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5, 'f'=>6, 'g'=>7, 'h'=>8,
            'i'=>9, 'j'=>10, 'k'=>11, 'l'=>12, 'm'=>13, 'n'=>14, 'o'=>15, 'p'=>16,
            'q'=>17, 'r'=>18, 's'=>19, 't'=>20, 'u'=>21, 'v'=>22, 'w'=>23, 'x'=>24,
            'y'=>25, 'z'=>26
        ];

        for ($i = 0; $i < strlen($slovo); $i++) {
            $znak = $slovo[$i];
              $hash .= $znak . $abeceda[$znak];
        }
        echo "Výstup: " . $hash;
    }
    

    
?>



  
</body>
</html>