<?php
include_once'config.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      
      
      <title>Employee Registration</title>
      <link rel="stylesheet" href="styles/e_register.css">
	  <link rel= "stylesheet" href = "styles/footer.css">
	  <link rel= "stylesheet" href = "styles/header.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
   
   

      <div class="Employee">
      <div class="container">
         <h1>Employee Registration</h1>
         <div class="progress-bar">
            <div class="step">
               <p>
                  Name
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Contact
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Birth
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Submit
               </p>
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>
         <div class="form-outer">
            <form action="" method="post">
               <div class="page slide-page">
                  <div class="title">
                     Basic Info:
                  </div>
                  <div class="field">
                     <div class="label">
                        First Name
                     </div>
                     <input type="text" id="firstName" name="firstName" required>
                  </div>
                  <div class="field">
                     <div class="label">
                        Last Name
                     </div>
                     <input type="text" id="lastName" name="lastName" required>
                  </div>
                  <div class="field">
                     <button class="firstNext next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Contact Info:
                  </div>
                  <div class="field">
                     <div class="label">
                        Email Address
                     </div>
                     <input type="email" id="email" name="email" required>
                  </div>
                  <div class="field">
                     <div class="label">
                        Phone Number
                     </div>
                     <input type="phone" id="phnNumber" name="phnNumber" required>
                  </div>
                  <div class="field btns">
                     <button class="prev-1 prev">Previous</button>
                     <button class="next-1 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Date of Birth:
                  </div>
                  <div class="field">
                     <div class="label">
                        Date
                     </div>
                     <input type="date" id="DOB" name="DOB" required>
                  </div>
                  <div class="field">
                     <div class="label">
                        Gender
                     </div>
                     <select name = "gender">
                        <option value="m" id="male">Male</option>
                        <option value="f" id="female">Female</option>
                        <option value="o" id="other">Other</option>
                     </select>
                  </div>
                  <div class="field btns">
                     <button class="prev-2 prev">Previous</button>
                     <button class="next-2 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Login Details:
                  </div>
                  <div class="field">
                     <div class="label">
                        Employee ID
                     </div>
                     <input type="text" id="emid" name="emid" required>
                  </div>
                  <div class="field">
                     <div class="label">
                        Password
                     </div>
                     <input type="password" id="Password" name="password" required>
                  </div>
                  <div class="field btns">
                     <button class="prev-3 prev">Previous</button>
          
					 <input type = "submit" name = "esubmit" value ="Submit">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   
   
   <?php
	
	if(isset($_POST['esubmit'])){
		$firstName= $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email    = $_POST['email'];
		$phnNumber = $_POST['phnNumber'];
		$DOB      = $_POST['DOB'];
		$gender   = $_POST['gender'];
		$emid   = $_POST['emid'];
		$password = $_POST['password'];
		
		$stmt = $conn->prepare ("INSERT INTO employees (firstName, lastName, email, phnNumber, DOB, gender, emid, password)VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssss", $firstName, $lastName, $email, $phnNumber, $DOB, $gender, $emid, $password);
		$result = $stmt->execute();
	
		if($result){
			echo "<script> alert('Successfully Registered')</script>";
			
		}else{
			echo "<div class='form'>
                  <h3>Something went wrong.</h3><br/>
                  <p class='link'>Click here to <a href='e_register.php'>register</a> again.</p>
                  </div>";
		}
        
	}
	?>
   
   
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

      <script src="js/e_register.js"></script>
     
</script>
   </body>
</html>