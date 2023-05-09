<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $ownerName = $_POST["ownerName"];
  $driverName = $_POST["driverName"];
  $busNumber = $_POST["busNumber"];
  $capasity = $_POST["capasity"];
  $startl = $_POST["startl"];
  $endl = $_POST["endl"];
  $ownerContact = $_POST["ownerContact"];
  $timeSlot = $_POST["timeSlot"];
  $driverContact = $_POST["driverContact"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword= $_POST["confirmpassword"];
  $availability="yes";
  $duplicate = mysqli_query($conn, "SELECT * FROM bus_details WHERE ownerName = '$ownerName' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('ownerName or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
  $timeSlot = $_POST["timeSlot"];
      $query = "INSERT INTO bus_details VALUES('','$ownerName','$driverName','$busNumber','$capasity','$startl','$endl','$ownerContact','$timeSlot','$driverContact','$email','$password','$availability')";
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
    <link rel="stylesheet" href="busStyle.css"/>
    <title>Passenger Registration</title>
    <script src="https://kit.fontawesome.com/b93bbc397b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css2/style.css">
  </head>
  <body>


  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
  <ul class="nav navbar-nav navbar-right">
              
  <li><a href="../index.html" class="page-scroll"><h3>Home</h3></a></li>
              
          
  </ul>
          
  </div>


  <div class="container2">
    
   <div class="form-box2">

   <!-- start of the table -->
   <table class="center">

   <h2> Bus Registration</h2>
   <form class="" action="" method="post" autocomplete="off">


  <div class="input-group2">

  <tr>
    <td>
      <div class="input-field2" id="ownerName">
      <i class="fa-solid fa-user"></i>
      <input type="text"  placeholder="Owner Name" name="ownerName" id = "ownerName" required value=""> 
      </div>
    </td>

  

    <td>
      <div class="input-field2" id="driverName">
      <i class="fa-solid fa-user-pen"></i>  
      <input type="text" placeholder="Driver name" name="driverName" id ="driverName" required value=""> 
      </div>
    </td>

    <td>
      <div class="input-field2" id="busNumber">
      <i class="fa-solid fa-bus"></i> 
      <input type="text" placeholder="Bus Number" name="busNumber" id = "busNumber" maxlength="10" required value="" > 
      </div>
    </td>


  </tr>
 
 




  

    <tr>  

        <td>
          <div class="input-field2" id="capasity">
          <i class="fa-solid fa-people-roof"></i>
          <input type="text" placeholder="Capasity" name="capasity" id = "capasity"  required value="" > 
          </div>
        </td>
 

        <td>
          <div class="input-field2" id="ownerContact">
          <i class="fa-solid fa-phone"></i>
          <input type="text" placeholder="Contact Owner" name="ownerContact" id = "ownerContact" maxlength="10" required value="" > 
          </div>
        </td>

        <td>
          <div class="input-field2" id="driverContact">
          <i class="fa-solid fa-phone"></i>
          <input type="text" placeholder="Contact Driver" name="driverContact" id = "driverContact" maxlength="10" required value="" > 
          </div>
        </td>


    </tr>


      
  <tr>


    <td>
      <div class="input-field2" id="email">
      <i class="fa-solid fa-envelope"></i>  
      <input type="email" placeholder="Email" name="email" id = "email" required value="">
      </div>
    </td>


    <td>
      <div class="input-field2" id="password">
      <i class="fa-solid fa-key"></i> 
      <input type="password" placeholder="Password" name="password" id = "password" required value=""> 
      </div>
    </td>
    
    <td>
      <div class="input-field2" id="confirmpassword">
      <i class="fa-solid fa-key"></i> 
      <input type="password" placeholder="Confirm Password" name="confirmpassword" id = "confirmpassword" required value=""> 
      </div>
    </td>
  </tr>
  
  

  <tr>
    <td>
      <div class="input-field2">
      <p>Start Location</p>
      <i class="fa-solid fa-road"></i> 
      <select name="startl"  required>
							<option value="" disabled selected hidden>Please select..</option>
							<!-- <option value="Galle">Galle</option>
							<option value="Gampaha">Gampaha</option>							
							<option value="Kadawatha">Kadawatha</option> -->
							<option value="Makumbura">Makumbura</option>							
							<!-- <option value="Matara">Matara</option>
							<option value="Panadura">Panadura</option> -->
			</select>
    </td>
      <td>
      <div class="input-field2" id="busRoot">
      <p>End Location</p>
      <i class="fa-solid fa-road"></i> 
      <select name="endl" required >
							<option value="" disabled selected hidden>Please select..</option>
							<option value="Galle">Galle</option>
							<option value="Gampaha">Gampaha</option>							
							<option value="Kadawatha">Kadawatha</option>
							<!-- <option value="Makumbura">Makumbura</option>							 -->
							<option value="Matara">Matara</option>
							<option value="Panadura">Panadura</option>
						</select>

      </div>
      </td>


      <td>

      <div class="input-field2" id="busRoot">
      <p>Departure time</p>
      <i class="fa-solid fa-road"></i> 
      <input type="time" name="timeSlot" required >
        </div>

      </td>  

    </tr>




  </table> 
  <!-- end of the table -->


  <div class="btn-field2">
    <button type="submit" name="submit">Register</button>
    </div>
    
  <div class="login-clear__DIV2">




    <div class="clerButton2">
      <button type="reset" name="clear">Clear</button>
    </div>

    

    <div class="loginButton2">
      <button type="button"><a href="buslogin.php"><h4>Login</h4></a></button>
      </div>


 


  </div>
  



</div>

  

</form>
   </div> 






<br>

  </div>

  
  </body>
</html>