<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Login stránka - Cookies úloha</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php 

$username = "admin";
$password = "1234";
$message = "";

if(isset($_POST["login"])){
  if(isset($_POST["username"]) && isset($_POST["password"])){
    if($username == $_POST["username"] && $password == $_POST["password"]){
      setcookie("logged", "1", time() + 3600);
      $_COOKIE["logged"] = "1";
    }
  }
}

if(isset($_POST["logout"])){
  setcookie("logged", "0", time() - 3600);
  unset($_COOKIE["logged"]);
}

/*
Požiadavky na riešenie:
Vytvorte HTML formulár s poľami: username, password

Po odoslaní formulára:
skontrolujte, či sú údaje správne (jednoduchá kontrola, napr. admin/1234)
ak sú správne, uložte cookie logged s hodnotou 1 na 1 hodinu

Pri načítaní stránky:
ak existuje cookie logged, zobrazte správu: „Používateľ je prihlásený“
ak neexistuje, zobrazte správu používateľ nie je príhlásený
alebo zobrazte rovno prihlasovací formulár. 
*/
?>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
        <h3 class="text-center mb-3">Prihlásenie používateľa</h3>
        <p class="text-muted text-center">Táto stránka bude ukladať prihlásenie pomocou cookies</p>

        <!-- TU BUDE PHP KÓD NA KONTROLU COOKIES -->
        <!-- Napr: ak je používateľ prihlásený, zobraz správu -->

        <form method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Používateľské meno</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Zadaj meno">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Heslo</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Zadaj heslo">
            </div>

            <?php
            if(!isset($_COOKIE["logged"])){
              echo "<button type='submit' name='login' 
              class='btn btn-primary w-100'>Prihlásiť sa</button>";
            }
            ?>
        </form>

        <hr class="my-3">

        <!-- Tlačidlo na odhlásenie (neskôr PHP) -->
        <form method="post" action="">
            <button type="submit" name="logout" class="btn btn-outline-danger w-100">Odhlásiť sa</button>
        </form>

        <!-- MIESTO NA VÝPIS SPRÁVY (PHP echo) -->
        <div class="mt-3 text-center">
            <!-- Tu vypíš: Používateľ je prihlásený / neprihlásený -->

            <?php
            if(isset($_COOKIE["logged"])){
              $message = "Používateľ je prihlásený";

            }else{
              $message = "Používateľ nie je prihlásený";
            }
            ?>

            <p><?php echo $message ?></p>
        </div>
    </div>
</div>

</body>
</html>
