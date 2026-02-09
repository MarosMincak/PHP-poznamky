<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $password = "admin123";

  $hash = password_hash($password, PASSWORD_BCRYPT);
  echo $password;
  echo "</br>";
  echo $hash;

  echo "</br>";

  var_dump(password_get_info($hash));

  if(password_verify($password, $hash)){
    echo "You're logged in";
  }else{
    echo "Incorrect password!";
  }

  ?>
  
</body>
</html>