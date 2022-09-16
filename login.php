<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
	
	<link rel="stylesheet" href="styles/login.css">
	<link rel= "stylesheet" href = "styles/footer.css">
	<link rel= "stylesheet" href = "styles/header.css">
    
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


<?php
    include_once 'config.php';
    session_start();
	
    
    if (isset($_POST['email'])) {
		
		$email = stripslashes($_REQUEST['email']);    
        $email = mysqli_real_escape_string($conn, $email);
		
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
		
        $query    = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
		
        $result = mysqli_query($conn, $query) or die(mysql_error());
		
        $rows = mysqli_num_rows($result);
		
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            header("Location: home.php");
        } else {
            echo "<h4>Incorrect E-mail address/password. Try Again.</h4><br/>";
		
                  
        }
    }
?>

<center> <div class="login">
   
    <fieldset style="background-color:  #dfdfdf;">
	<center> <h3 > Login Page </h3> </center>
	</fieldset>
	<fieldset style="background-color:  white">
	<center><img src="images/profile.png"
	width="210px"
	height="210px"
	/>
	<p> Your Name </p>
	</center>
	</fieldset>
	
	
	<fieldset style="background-color:  #dfdfdf;">
	<br>
	<center >
	
	
	<form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
		<input type="email" class="login-input" name="email" placeholder = "Enter Your Email Address"><br><br>
        <input type="password" class="psw" name="password" placeholder="Enter Your Password"><br>
		<br>
	<a href="#" id="forgot">Forgot Password?</a>
	<br><br>
        <input type="submit" value="Login" name="login" style="text-align:center "; class="button"><br>
        <p class="link">Don't have an account? <a href="registration.php">Register Now</a></p>
  </form>
	
	
	</center>
	</fieldset>
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