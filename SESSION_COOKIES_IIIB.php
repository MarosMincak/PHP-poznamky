<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $name = "a";
    //setcookie($name, "Jozef", time() + 3600);

    echo $_COOKIE[$name];


  ?>
</body>
</html>