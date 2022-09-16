<?php
include_once'config.php';
?>

<!DOCTYPE html>
<html>
 <head>
	<title> Contact us page </title>
	<link rel="stylesheet" href="styles/contact.css">
	 <link rel= "stylesheet" href = "styles/footer.css">
	<link rel= "stylesheet" href = "styles/header.css">
     
	<style>
	
	
   </style>
 </head>
 
 <body>
 
    
	<img src = "images/pic.png" alt = "Logo" width = "100px" height = "100px" class = "logo">
<center>
 
 <h1>SwiftAir</h1>
 
</center>

 <hr>

 <ul type = "disc" class = "abc">
<li class = "abc"><a class = "xyz" href="home.php">Home</a></li>
<li class = "abc"><a class = "xyz" href="booking.php">Booking</a></li>
<li class = "abc"><a class = "xyz" href="schedule.php">Flight Schedule</a></li>
<li class = "abc"><a class = "xyz" href="payment.php">Payment</a></li>
<li class = "abc"><a class = "xyz" href="registration.php">Sign Up</a></li>
<li class = "abc"><a class = "xyz" href="login.php">Login</a></li>
<li class = "abc"><a class = "xyz" href="contact.php">Contact Us</a></li>
<li class = "abc"><a class = "xyz" href="e_register.php">Employee Sign Up</a></li>
</ul>

<hr>
	
   	<br>
   
   <center> <div class="contact">
   <fieldset style="background-color:  white">
   <center><h1>Contact us</h1><br>
   <p> We are always happy to help!</p></center>
   </fieldset>
	
   <table border="1" width="100%">
   <colgroup>
       <col span="1" style="width: 65%;">
       <col span="1" style="width: 35%;">
    </colgroup>
    
    
   <tr >
	<td style="background-color: #aaa">
	<h2 >&emsp;&emsp;&emsp;Contact Information </h2>
	<hr style="height:5px;background-color:white">
	<br>
	&emsp;&emsp;&emsp;<img src ="images/icon-map.png"
	      <br> &emsp;&emsp; No 16,    
	       &emsp;SwiftAir airline,
		  &emsp;Colombo,
		  &emsp;Sri Lanka
	<br><br><br>
	
	&emsp;&emsp;&emsp;<img src ="images/icon-email.png" <p>	&emsp;&emsp; SwiftAir@usa.com</p>
	<br><br>
	
	&emsp;&emsp;&emsp;<img src ="images/icon-mobile.png" <p> &emsp;&emsp; +94 11 7 788 432 </p>
	
	<hr style="height:5px;background-color:white">
	<ul class="image">
	<li class="image">
    <img src="images/icon-g-plus.png">
	&emsp;<img src="images/icon-fb.png" />
	&emsp;<img src="images/icon-twitter.png"/>
	&emsp;<img src="images/icon-youtube.png"/> 
	
	</td>
	<td style="background-color: #CCCCCC">
	<center><h3> Send a message </h3>
	<p> Send a message & we will reply within 24 hours </p>
	
	
	<Textarea rows="10" cols="30" id="massage"  placeholder="Type your  message here...." ></textarea>
     </center>
	 <br><br>
	 
	 
	 <center>
	 <input type="submit" id="Submit" class="button" >
	</center>
	</td>
   </tr>
   </table>
   </div></center>
   
   
   <section class="footer">
        <div class="row">
            <div class="footcol">
                <pre><p id="p2">Contact US<br><br>Mailing Adress<br></p></pre>
                
                <p id="p3">No 16,<br>Swift Air,<br>Colombo,<br>Sri Lanka</p>

            </div>
            <div class="footcol">
                <pre> <p id="p2">Subscribe to our special offers</p></pre>
                <label for="email">Email</label>
                
				<form action="" method="post">
                <input type="e-mail" id="e-mail" name="e-mail">
                <button type="submit" name = "submitemail">Submit</button>
            </form >
			
			<?php 

    if(isset($_POST['submitemail'])){
        $e_mail=$_POST['e-mail'];
		
		$stmt = $conn->prepare ("INSERT INTO email (mail)VALUES(?)");
		$stmt->bind_param("s", $e_mail);
		$result = $stmt->execute();

        if($result){
            echo "<script> alert('Subscription Success'); window.location='home.php'; </script>";
        }
        else{
            echo "<script> alert('Subscription Failed'); window.location='newsletter.php'; </script>";
        }
    }
   
?>
				
                <p id="p3">For details on how we use your<br> information please check <br>our privacy policy.</p>
            </div>
            <div class="footcol" style="text-align: justify;">
                <pre><p id="p2">Follow Us <br></p></pre>
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
                    height="25" width="25">Facebook</pre> <br>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/768px-Instagram_logo_2016.svg.png"
                    height="25" width="25">Instagram<br>
                <img src="https://toppng.com/uploads/preview/twitter-logo-icon-social-media-icon-png-and-vector-twitter-logo-png-vector-11562867823o7sjvkzjin.png"
                    height="25" width="25" >Twitter
            </div>
        </div>
	
	
		
		
  </body>
 </html> 