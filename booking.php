<?php
include("session.php");
include_once'config.php';
?>

<!DOCTYPE html>
<html>
	 <head>
		<title> Ticket Booking </title>
		<link rel="stylesheet" href="styles/booking.css">
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

 
 

					<br>
					
						<input type="radio" name="payN" class="payButton">
						<label for="payN">Pay Now</label>

						<input type="radio" name="payP" class="payButton">
						<label for="payN">Partial Payment</label>
				
	  <div class="contentMain">
						<div class="contentC" id="c1">

								<div class="D1">
									<label for="origin"><img src="images/Plane.png"  width="20px" height="20px"/>  Origin</label><br>
									<input type="text"  placeholder="Airport name" class="D2">
								</div>
								
								<br><br>
								
								<div class="D1">
									<label>Departure Date</label><br>
									<input type="Month" name="day" class="Exday" >
									
								</div>
								
								<br>
								
										<div class="contentMain">
												<div class="contentC12" id="c12">
												<label>Airline</label><br>
												<input type="text"  placeholder="All" class="zz">
														

												</div>
												
												<div class="contentC12" id="c13">
												<label>class</label><br>
														<select name="class" size="1" id="zz">
														  <option value="economy">economy</option>
														  <option value="premium economy">premium economy</option>
														  <option value="business">business</option>
														  <option value="first class.">first class.</option>
														  
														</select>

												</div>
										</div>
								
								
								
								
								<br>
								
						
							
						</div>
						
						<div class="contentC" id="c2">
						
									<div class="D1">
										<label for="origin"><img src="images/Plane.png"  width="20px" height="20px"/>  Destination</label><br>
										<input type="text"  placeholder="Airport name" class="D2">
									</div>
									
									<br><br>
								
									<div class="D1">
										<label>Return Date</label><br>
										<input type="Month" name="day" class="Exday" >
									</div>
									
									<br><br>
									
											<div class="contentMain">
												<div class="contentC12" id="c12">
													<label>Adults</label><br>
													<select name="cars" size="1" multiple id="zz">
														  <option value="1">1</option>
														  <option value="2">2</option>
														  <option value="3">3</option>
														  <option value="4">4</option>
														  <option value="5">5</option>
														  <option value="6">6</option>
														  <option value="7">7</option>
														  <option value="8">8</option>
													  </select>
					
														

												</div>
												
												
												<div class="contentC12" id="c13">
													<label>Children</label><br>
													<select name="cars" size="1" multiple>
														  <option value="1">1</option>
														  <option value="2">2</option>
														  <option value="3">3</option>
														  <option value="4">4</option>
														  <option value="5">5</option>
														  <option value="6">6</option>
														  <option value="7">7</option>
														  <option value="8">8</option>
													 </select>
                          

												</div>
												
									    	</div>
									
							
									
									
						</div>
						
						
        </div>
		<button type="reset" class="submit"  >Clear Form</button>
		<button type="submit" class="submit" >Submit Form</button>
		   <br>
		   
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










