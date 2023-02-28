<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: ../MyBus/reserved.php");
}
if(isset($_POST["passengersubmit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM passenger WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["passengerlogin"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: ../MyBus/reserved.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Passenger Login</title>
    <script src="https://kit.fontawesome.com/b93bbc397b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css2/style.css">
    

    <!-- --------------------------------- -->
    


  </head>
  <body>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
<ul class="nav navbar-nav navbar-right">
            
<li><a href="../index.html" class="page-scroll"><h3>Home</h3></a></li>
            

          
</ul>
        
</div>
    
  <div class="container">
  <a class="logo" href="../index.html"> <i class="fas fa-home"></i></a>
    <div class="form-box">
    <h2>Passenger Login</h2>


<form class="" action="" method="post" autocomplete="off">

    <div class="input-group">

        <div class="input-field" id="usernameOrpassword">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Username or Email" name="usernameemail" id = "usernameemail" required value=""> <br>
        </div>

        <div class="input-field">
            <i class="fa-solid fa-key"></i>
            <input type="password" placeholder="Password" name="password" id = "password" required value=""> <br>
        </div>


        
        
    </div>
    <div class="btn-field">
    <button type="submit" name="passengersubmit">Login</button></br></br>
    </div>
    
</br>
    <div class="regbutton">
          <button type="button"><a href="passengerRegistration.php">Registration</a></button>
    </div>
    
 



    </div>      
  
</form>
<br>


    </div>
  

  </div>
    
  </body>
</html>
