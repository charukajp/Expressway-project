<?php   
 $conn=mysqli_connect("localhost","root","","expressway"); //database connection  
 //hostname, username, password, database name  
 if ($conn) {  
      echo "Connection successfully";  
 }else{  
      echo "Error";  
 }  
 //check database connect or not  
 $query="select * from BusDetails";  
 $query2="select * from RootDetails";
 $query3="select * from Shedule";

 $connect=mysqli_query($conn,$query); 
 $connect2=mysqli_query($conn,$query2);
 $connect3=mysqli_query($conn,$query3);

 $num=mysqli_num_rows($connect); //check in database any data have or not  
 $num2=mysqli_num_rows($connect2);
 $num3=mysqli_num_rows($connect3);
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>
    
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>Bus schedule</title>
	<link rel="icon" href="img/icon.ico" type="image/ico">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- bootstrap footer -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- script-->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      <meta charset="utf-8">  
      <title>How to Select Data from Database in PHP & Display in Table Format</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                width: 100%;  
                min-height: 100vh;  
                background-color: #5d6d7d;  
           }  
           .container{  
                max-width: 900px;  
                margin: 100px auto;  
                width: 100%;  
           }  
           table{  
                border-collapse: collapse;  
                width: 100%;  
           }  
           table th{  
                background-color: white;  
                color: red;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: #fff;  
                font-size: 1em;  
                text-align: center;  
           }  
           table tr:nth-child(odd){  
                background-color: #797676;  
           }  
      </style>  
 </head>  
 <body>  

 <header >
	<div >
		<a href="index.html"><img src="img/logo.png" width="100%" height="100%"> </a>
	</div>
 </header>
 
 <div class="container"> 
        <div class="col-md-7 col-md-push-5">
		<div class="booking-cta">
				
            <h1 align="center">Your Bus</h1> 
      </div>
	 </div>
     <div class="booking-form">
      <table border="1">  
           <tr>  
                <th>Bus Number</th>  
                <th>Bus Name</th>  
                <th>Bus Root</th>  
                <th>Contact</th>  
           </tr>  
           <?php   
                if ($num>0) {  
                     while($data=mysqli_fetch_assoc($connect)){  
                          echo "  
                               <tr>  
                               <td>".$data['BusNo']."</td>  
                               <td>".$data['BusName']."</td>  
                               <td>".$data['BusRoot']."</td>  
                               <td>".$data['Contact']."</td>  
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table>
    </div>
      <div class="col-md-7 col-md-push-5">
	  <div class="booking-cta">
      <h1 align="center">Root Details</h1>
       </div>
       </div>
      
      <table border="1">  
           <tr>  
                <th>Root Number</th>  
                <th>Root Name</th>  
                <th>Distance</th>  
                <th>Ticket Price</th>  
           </tr>  
           <?php   
                if ($num2>0) {  
                     while($data=mysqli_fetch_assoc($connect2)){  
                          echo "  
                               <tr>  
                               <td>".$data['RootNum']."</td>  
                               <td>".$data['RootName']."</td>  
                               <td>".$data['Distance']."</td>  
                               <td>".$data['TicketPrice']."</td>  
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table>
      </table>
      
      <div class="col-md-7 col-md-push-5">
	  <div class="booking-cta">
      <h1 align="center">Shedule</h1>
      </div>
      </div>
      
      <table border="1">  
           <tr>  
                <th>Timeslot Number</th>  
                <th>Arrival Time</th>  
                <th>Departure Time</th>  
                <th>End Time</th>  
           </tr>  
           <?php   
                if ($num2>0) {  
                     while($data=mysqli_fetch_assoc($connect3)){  
                          echo "  
                               <tr>  
                               <td>".$data['Timeslot_Num']."</td>  
                               <td>".$data['ArrivalTime']."</td>  
                               <td>".$data['DepartureTime']."</td>  
                               <td>".$data['EndTime']."</td>  
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table>  

    </div>
  
 <!-- <div class="navbar navbar-default navbar-fixed-bottom" role="navigation" style="background: #151414;">
    <div class="container" >     
	<div class="footer">
    	<ul class="social-icon">
      		<li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-facebook"></ion-icon></a>
      		</li>
      		<li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-twitter"></ion-icon></a>
    		</li>
      		<li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
      		</li>
      		<li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-instagram"></ion-icon></a>
      		</li>
    	</ul>
    	<p> Develop and designed by undergraduates of university of Sri Jayawardenepura Sri Lanka </p>   
    	<p>&copy;2023 | All Rights Reserved</p>
  	</div> -->
	
            
 </body>  
 </html>  