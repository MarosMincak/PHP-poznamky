<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <input type="submit" name="zmaz" value="Zmaž ma">
  </form>
  <?php
  //SESSION 

  if(isset($_POST["zmaz"])){
    session_start();
    session_destroy();
  }else{
    session_start();
    $_SESSION["meno"] = "Juraj";
    echo $_SESSION["meno"];
  }
  ?>
</body>
</html>