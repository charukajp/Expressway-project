<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["passengersubmit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $nic = $_POST["nic"];
  $contact = $_POST["contact"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM passenger WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO passenger VALUES('','$name','$username','$nic','$contact','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Passenger Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css2/style.css">

    <!-- <link rel="stylesheet" type="text/css" href="../MyBus/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../MyBus/assets/css/bootstrap-theme.min.css"> -->

    <script src="https://kit.fontawesome.com/b93bbc397b.js" crossorigin="anonymous"></script>
  </head>
  <body>


  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
<ul class="nav navbar-nav navbar-right">
            
<li><a href="../index.html" class="page-scroll"><h3>Home</h3></a></li>
            
          
</ul>
        
</div>

  <div class="container">
    
   <div class="form-box">
   <h2> Passenger Registration</h2>
   <form class="" action="" method="post" autocomplete="off">


  <div class="input-group">

  <div class="input-field" id="nameField">
  <i class="fa-solid fa-user"></i>
  <input type="text"  placeholder="Name" name="name" id = "name" required value=""> 
  </div>

  <div class="input-field" id="username">
  <i class="fa-solid fa-user-pen"></i>  
  <input type="text" placeholder="Username" name="username" id = "username" required value=""> 
  </div>

  <div class="input-field" id="nic">
  <i class="fa-regular fa-id-card"></i> 
  <input type="text" placeholder="NIC" name="nic" id = "nic" maxlength="11" required value="" > 
  </div>

  <div class="input-field" id="contact">
  <i class="fa-solid fa-phone"></i>
  <input type="text" placeholder="Contact" name="contact" id = "contact" maxlength="10" required value="" > 
  </div>


  <div class="input-field" id="email">
  <i class="fa-solid fa-envelope"></i>  
  <input type="email" placeholder="Email" name="email" id = "email" required value="">
  </div>


  <div class="input-field" id="password">
  <i class="fa-solid fa-key"></i> 
  <input type="password" placeholder="Password" name="password" id = "password" required value=""> 
  </div>

  <div class="input-field" id="confirmpassword">
  <i class="fa-solid fa-key"></i> 
  <input type="password" placeholder="Confirm Password" name="confirmpassword" id = "confirmpassword" required value=""> 
  </div>

  <div class="btn-field">
  <button type="submit" name="passengersubmit">Register</button>
  </div>

  <div class="login-clear__DIV">

    <div class="clerButton">
      <button type="reset" name="clear">Clear</button>
    </div>

    <div class="clerButton">
      <button type="button"><a href="passengerlogin.php"><h4>Login</h4></a></button>
    </div>


  </div>
  



</div>

  

</form>
   </div> 






<br>

  </div>

  
  </body>
</html>
