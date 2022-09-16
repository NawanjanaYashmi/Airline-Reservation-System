<?php
include("session.php");
include_once'config.php';
?>


<!DOCTYPE html>
<html>
<head>
<title>OTP Verification Card Design | Rustcodes</title>
   <link rel="stylesheet" type="text/css" href="styles/verification.css">
   <link rel= "stylesheet" href = "styles/footer.css">
	<link rel= "stylesheet" href = "styles/header.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
 <p>Hello, <?php echo $_SESSION['email']; ?>! Welcome to SwiftAir!</p>
        <p><a href="logout.php">Logout</a></p>

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

	<div class="container d-flex justify-content-center align-items-center">
		<div class="card text-center">

			<div class="card-header p-5">
				<img src="images/shn1.png">
				<h5 class="mb-2">OTP VERIFICATION</h5>
				<div>
					<small>code has been send to *******1258</small>
				</div>
			</div>

			<div class="input-container d-flex flex-row justify-content-center mt-2">
				<input type="text" class="m-1 text-center form-control rounded" maxlength="1">
				<input type="text" class="m-1 text-center form-control rounded" maxlength="1">
				<input type="text" class="m-1 text-center form-control rounded" maxlength="1">
				<input type="text" class="m-1 text-center form-control rounded" maxlength="1">
				<input type="text" class="m-1 text-center form-control rounded" maxlength="1">
			</div>
		<div>
			<small>
				didn't get the otp
				<a href="#" class="text-decoration-none">Resend</a>
			</small>
	</div>

	<div class= "mt-3 mb-5">
		<a href = "ticket.php"><button class="btn btn-success px-4 verify-btn">verify</button></a>

</div>
</div>
</div>
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
