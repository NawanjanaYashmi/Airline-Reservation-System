<?php
include("session.php");
include_once'config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="styles/payment.css">
		<link rel= "stylesheet" href = "styles/footer.css">
	<link rel= "stylesheet" href = "styles/header.css">
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

	    
	<br><br>
	
        <div class="header">
            
                <h2>Payement method</h2>
            
		</div>
		
		<br>
			<hr class="headerHr">
			<br>
			<hr class="headerHr">
			
        <div class="contentMain">
            <div class="contentC" id="c1">
                <div class="contentInner">
                    <center>
                        <div class="innerPbutton">Credit Card</div>
                        <div class="innerPbutton">Debit Card</div>
                        <div class="innerPbutton">Net Banking</div>
                        <div class="innerPbutton">EMI Options</div>
                        <div class="innerPbutton">Mobile Wallet</div>
                        <div class="innerPbutton">Others</div>
                    </center>
                </div>
                
            </div>
            <div class="contentC" id="c2">
                
                <input type="radio" name="payN" class="payButton">
                <label for="payN">Pay Now</label>

                <input type="radio" name="payP" class="payButton">
                <label for="payN">Partial Payment</label>
                <br><br>
                <label for="cardholder" class="label1">Cardholder Name(Please enter the name which is written on your card)</label><br>
                <input type="text" name="cardholder" placeholder="Card holder's Name" class="inputField">

                <br><br>
                <label for="creditcard"  class="label1">Credit Card Number</label><br>
                <input type="text" name="creditcard" placeholder="Credit Card Number" class="inputField">

                <img src="images/card1.png" alt="" class="pi">
                <img src="images/card2.png" alt="" class="pi">
                <img src="images/card3.png" alt="" class="pi">
                <br><br>

                <label for="day" class="label1">Expiry Date</label><br>
                <input type="Month" name="day" class="Exday">
				<br><br>
				
                <label for="cvc" class="label1">CVC</label><br>
                
                <input type="password" name="cvc" class="CVC" >

                <br>
                
                <input type="checkbox" name="check" class="save1" >
                <label for="check" >Save my card for faster payment next time using</label>
                

                <br><br>
                <h4><span class="code">Promotion Code :</span> In case you have a promotion code: Enter it below and click "Apply"</h4>
                <input type="text" class="code">
                


                <a href = "verification.php"><button type="reset" class="payhere">Pay Now</button></a>
            </div>
        </div>

        <div class="bar">
            <center> By clicking on Pay Now, You are agreeing to Terms & Conditions </center>
        </div>
		
		<div>
				
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
			</section>
		</div>
    </body>
</html>