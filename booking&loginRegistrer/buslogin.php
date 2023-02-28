<?php
require 'config.php';
if(!empty($_SESSION["busID"])){
  header("Location: ../driver.php");
}
if(isset($_POST["submit"])){
  $ownernameOrpassword = $_POST["ownernameOrpassword"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM bus_details WHERE ownerName = '$ownernameOrpassword' OR email = '$ownernameOrpassword'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["buslogin"] = true;
      $_SESSION["busID"] = $row["busID"];
      header("Location: ../driver.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('Bus Not Registered'); </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bus Login</title>
    <script src="https://kit.fontawesome.com/b93bbc397b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css2/style.css">
  </head>
  <body>
   

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
<ul class="nav navbar-nav navbar-right">
            
<li><a href="../index.html" class="page-scroll"><h3>Home</h3></a></li>
          
</ul>
        
</div>



  <div class="container">
    <div class="form-box">
    <h2>Bus Login</h2>


<form class="" action="../driver.php" method="post" autocomplete="off">

    <div class="input-group">

        <div class="input-field" id="ownernameOrpassword">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Owner name or Email" name="ownernameOrpassword" id = "ownernameOrpassword" required value=""> <br>
        </div>

        <div class="input-field">
            <i class="fa-solid fa-key"></i>
            <input type="password" placeholder="Password" name="password" id = "password" required value=""> <br>
        </div>


        
        
    </div>

    <div class="spce-twoButtons">
    <div class="btn-field">
    <button type="submit" name="submit">Login</button></br></br>
    </div>

</br>
        <div class="regbutton">
            <button type="button"><a href="busRegistration.php">Registration</a></button>
        </div>

    </div>
   
    
 



    </div>      
  
</form>
<br>


    </div>
  

  </div>
    
  </body>
</html>
