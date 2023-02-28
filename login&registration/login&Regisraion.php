<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content=""width=device-width,initial-scale=l.0">
        <title>Sign in and sign up form</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/b93bbc397b.js" crossorigin="anonymous"></script>
    </head>

    <body>
      <div class="contaner">
        <div class="form-box">
            <div class="headingdiv">
                <h1 id="title">Sign Up </h1>
                
            </div>
            <div class="titleDescription">
                <h5 id="titleTwo">For New Passenger</h5>
            </div>
            <form action="login.php" method="post">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input  type="text" placeholder="Name" required>

                    </div>

                    <div class="input-field" id="nicField" >
                        <i class="fa-solid fa-id-card"></i>
                        <input type="text" placeholder="NIC" maxlength="11" required>

                    </div>

                    <div class="input-field" id="contactNumber" >
                        <i class="fa-solid fa-phone"></i>
                        <input type="text" placeholder="Contact Number" maxlength="10"required>

                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email"required>

                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" placeholder="Password" required>

                    </div >
                    <div class="input-field" id="reType">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" placeholder="Re-Type Password" required>

                    </div >
                    <div >
                        <p id="c">Lost password <a href="#">Click Here!</a></p>
                    </div>
                    
                </div>

                <div class="btn-field" id="btnGroup">
                    <button type="button" id="signupBtn">Sign Up</button>
                    <button type="button" id="signinBtn" class="disable">Sign In</button>
                </div>
            </form>


        </div>

      </div> 


<script defer>

// let signupBtn=document.getElementById("signiupBtn");
// let signinBtn=document.getElementById("signinBtn");
// let nameField=document.getElementById("nameField");
// let title=document.getElementById("title");


signinBtn.onclick=function(){
        nameField.style.maxHeight="0";
        nicField.style.maxHeight="0";
        contactNumber.style.maxHeight="0";
        reType.style.maxHeight="0";
        
        title.innerHTML="Sign In";
        titleTwo.innerHTML="For registered paseengers";
        btnGroup.style
        signupBtn.classList.add("disable");
        signinBtn.classList.remove("disable");
        
        
        

}

signupBtn.onclick=function(){
        nameField.style.maxHeight="60px";
        nicField.style.maxHeight="60px";
        contactNumber.style.maxHeight="60px";
        reType.style.maxHeight="60px";
       
        title.innerHTML="Sign Up";
        titleTwo.innerHTML="For New Passenger";
        signupBtn.classList.remove("disable");
        signinBtn.classList.add("disable");
        
        
        
        

}


</script>
    </body>
</html>