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

  <?php
  $meno = "admin";
  $heslo = "1234";
  $menoInput = "";
  $hesloInput = "";
  ?>

  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
      <h3 class="text-center mb-3">Prihlásenie používateľa</h3>
      <p class="text-muted text-center">Táto stránka bude ukladať prihlásenie pomocou cookies</p>

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

        if (isset($_POST["login"])) {
          if (isset($_POST["username"]) && isset($_POST["password"])) {
            $menoInput = $_POST["username"];
            $hesloInput = $_POST["password"];
          }
        }
        if (!isset($_COOKIE["logged"])) {
          echo "<button type='submit' name='login' 
            class='btn btn-primary w-100'>Prihlásiť sa</button>";
        }


        if ($menoInput == $meno && $hesloInput == $heslo) {
          setcookie("logged", "1", time() + 3600);
          $_COOKIE["logged"] = "1";
        }
        ?>

      </form>
      <hr class="my-3">

      <!-- Tlačidlo na odhlásenie (neskôr PHP) -->

      <form method="post" action="">
        <?php
        if (isset($_COOKIE["logged"])) { // ak som prihlásený
          echo "<button type='submit' name='logout' class='btn btn-outline-danger w-100'>Odhlásiť sa</button>";
        }
        if (isset($_POST["logout"])) {
          setcookie("logged", "0", time() - 3600);
          $_COOKIE["logged"] = "0";
        }
        ?>

      </form>


      <!-- MIESTO NA VÝPIS SPRÁVY (PHP echo) -->
      <div class="mt-3 text-center">
        <!-- Tu vypíš: Používateľ je prihlásený / neprihlásený -->
        <?php
        if ($_COOKIE["logged"]) {
          echo "Prihlaseny";
        } else {
          echo "Odhlaseny";
        }
        ?>
      </div>
    </div>
  </div>

</body>

</html>