<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <label for="name">Name: </label>
    <input type="text" name="name">
    <br> 
    <label for="email">E-mail: </label>
    <input type="text" name="email">
    <br>
    <label for="website">Website: </label>
    <input type="text" name="website">
    <br>
    <label for="comment">Comment: </label>
    <textarea name="comment"></textarea>
    <br>
    <label for="male">Male: </label>
    <input type="radio" name="male">
    <label for="female">Female: </label>
    <input type="radio" name="female">
    <label for="other">Other: </label>
    <input type="radio" name="other">
    <br>
    <input type="submit" name="submit" value="Odoslať">
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $comment = $_POST['comment'];

        if(isset($_POST['male'])){
          $gender = "Male";
        }elseif(isset($_POST['female'])){
          $gender = "Female";
        }else{
          $gender = "Other";
        }
        
        echo "Hello, " . $name . "!" . "<br>";
        echo "Your E-mail, " . $email . "!" . "<br>";
        echo "Your website, " . $website . "!" . "<br>";
        echo "Your comment, " . $comment . "!" . "<br>";
        echo "Your gender, " . $gender . "!" . "<br>";
    }
    ?>
</body>
</html>