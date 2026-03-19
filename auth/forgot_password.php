<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8">
  <title>Zabudnuté heslo stránka - Cookies úloha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <?php
  $conn = mysqli_connect("localhost", "root", "root", "auth");

  if(!$conn){
    echo "Chyba pripojenia" . mysqli_connect_error();
  }
?>

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
    
    <h3 class="text-center mb-3">Zabudnuté heslo používateľa</h3>
    <p class="text-muted text-center">Použitie cookies</p>
      
      <!-- REGISTER FORM -->
      <form method="post">
        <div class="mb-3">
          <label class="form-label">Používateľské meno</label>
          <input type="text" class="form-control" name="username" required>
        </div>

        <button type="submit" name="forgotPassword" class="btn btn-primary w-100">
          Zobraziť heslo
        </button>
      </form>

    <hr class="my-3">

    <div class="text-center">
      <a href="register.php">registrovať sa</a>
      <a href="login.php">Prihlásiť sa</a>
    </div>

  </div>
</div>

</body>
</html>