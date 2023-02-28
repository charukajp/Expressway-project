<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM passenger WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: passengerlogin.php");
}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>Welcome <?php echo $row["name"]; ?></h1>
    <a href="logout.php">Logout</a><br><br>
    <a href="MyBus/index.php">You can  Reservation <?php echo $row["name"]; ?></a>
  </body>
</html>