  <?php
  $conn = mysqli_connect("localhost", "root", "root", "auth");

  if(!$conn){
    echo "Chyba pripojenia" . mysqli_connect_error();
  }
  ?>