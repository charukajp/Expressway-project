<?php
require 'config.php';
if(!empty($_SESSION["busID"])){
  $busID = $_SESSION["busID"];
  $result = mysqli_query($conn, "SELECT * FROM bus_details WHERE busID = $busID");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location:buslogin.php");
}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>Welcome bus owner <?php echo $row["ownerName"]; ?></h1>
    <a href="buslogout.php">Logout</a>
  </body>
</html>