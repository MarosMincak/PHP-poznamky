<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


  <?php 
  // Príklady na precvičenie
  /*
  Zadanie 1.
  Vytvorte funkciu, ktorá vráti súčet dvoch čísel.
  */  

  /*
  function sucet($a, $b){
    if(is_int($a) && is_int($b)){
      return $a + $b;
    }else{
      echo "Nie sú to čísla";
    }
  }
  
  sucet("pes", "macka");

  */



  
  /*
  Zadanie 2.
  Vytvorte funkciu, 
  do ktorej bude vstupovať pole čísel.
  Funkcia by mala celé pole sčítať, 
  vrátiť a vypísať výsledok
  */

  /*
  function sucetPola($pole){
    $sucet = 0;
    foreach($pole as $p){
      $sucet = $sucet + $p;
    }
    return $sucet;
  }

  echo sucetPola([30,20,10,4,6]);
  */







  //Zadanie č. 3.
  /*
  Vytvorte funkciu, do ktorej bude vstupovať 
  pole známok (čísla od 1-5).
  Úloha: vypočítať priemer 
  (zaokrúhliť na 2 desatinné miesta) triedy a určiť, 
  koľko žiakov má jednotku.
  */

  /*
  function priemerPola($pole){
    $sucet = 0;
    $jednotky = 0;
    foreach($pole as $p){
      if($p == 1){
        $jednotky++;
      }
      $sucet = $sucet + $p;
    }

    $priemer = $sucet / count($pole);

    echo "Priemer je: " . $priemer . "<br>";
    echo "Pocet jednotiek: " . $jednotky . "<br>";
  }

  */

  

  // Zadanie č. 4. 
  /*
  Vytvorte funkciu, ktorej vstup bude pole 
  produktov a ich cien (asociatívne pole).
  Úloha: Pre každý produkt zistí, aká je jeho cena 
  a koľko produktov stojí menej než 10 eur.
  */

  /*
  $produkty = [
    "notebook" => 850, 
    "rohlík" => 0.13, 
    "router" => 60,
    "sluchadla" => 8.90
  ];

  function cenaProduktu($produkty){
    $pocetLacnych = 0;
    foreach($produkty as $nazov => $cena){
      echo "Názov: " . $nazov . " Cena: " . $cena;

      if($cena < 10){
        $pocetLacnych++;
      }
    }
    echo "Počet produktov < než 10 eur" . $pocetLacnych;
  }
    */

  // Zadanie 5.
  /*
  Vytvorte funkciu na výpočet faktoriálu 
  zadaného čísla.
  */







    /*
    function cenaProduktu($produkty){
      $pocetProduktovMenejNez10 = 0;
      foreach($produkty as $nazov => $cena){
        if($cena < 10){
          $pocetProduktovMenejNez10++;
        }
      }
      echo $pocetProduktovMenejNez10;
    }
    cenaProduktu($produkty);
    */


    //Zadanie c. 6
    /*
    Vytvorte simuláciu registrácie užívatela.

    Meno - 
    reťazec, 
    minimálne 3 znaky, 
    maximálne 20 znakov a bez čísel
    Heslo - 
    minimálne 8 znakov, 
    musí obsahovať aspoň jedno veľké písmeno,
    aspoň jedno číslo a aspoň jeden špeciálny znak
    */
    $meno = "";
    $heslo = "";

    function kontrolaMena($meno){
      if(strlen($meno) > 3 && strlen($meno) < 20){
        echo "Meno " . $meno . "<br>";
      }else{
        return false;
      }
    }

    function kontrolaHesla($password){
      if(strlen($password) >= 8){
        if(preg_match('/[A-Z]/', $password) && preg_match('/[0-9]/', $password) && preg_match('/[\W_]/', $password)){
          echo "Heslo " . $password . "<br>";
        }
      }else{
        return false;
      }
    }

    //Domáca úloha
    /*
    Vytvorte funkciu, do ktorej bude vstupovať 
    celé číslo N.
    Úloha: pomocou cyklu vytvoriť pole všetkých 
    párnych čísel od 1 po N, vypočítať ich súčet.
    Výstup: Zoznam čísel a súčet.
    */


  ?>
</body>
</html>