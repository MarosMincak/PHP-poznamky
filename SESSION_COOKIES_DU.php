<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SESSION COOKIES DÚ</title>
</head>
<body>
  <form method="post">
    <input type="submit" name="delete" value="Reset návštev">
  </form>

  <?php
  session_start();


  $i = 1;
  setcookie("visits", $i++, (time() + 3600) * 7);

  echo "Toto je vaša " . $i  . "návšteva tejto stránky";

  if(isset($_POST["delete"])){

  }
  ?>
</body>
</html>