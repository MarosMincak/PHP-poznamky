<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8">
  <title>Registrácia stránka - Cookies úloha</title>
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
    
    <h3 class="text-center mb-3">Registrácia používateľa</h3>
    <p class="text-muted text-center">Použitie cookies</p>
      
      <!-- REGISTER FORM -->
      <form method="post">
        <div class="mb-3">
          <label class="form-label">Používateľské meno</label>
          <input type="text" class="form-control" name="username" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Heslo</label>
          <input type="password" class="form-control" name="password" required>
        </div>

        <button type="submit" name="login" class="btn btn-primary w-100">
          Registrovať sa
        </button>
      </form>

    <hr class="my-3">

  </div>
</div>

</body>
</html>