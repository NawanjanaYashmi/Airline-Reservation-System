<?php
include_once'config.php';
?>

<!DOCTYPE html>
<html>
 <head>

 <title>Registration</title>
 
 <link rel = "stylesheet" href = "styles/thamasha.css">
 <link rel= "stylesheet" href = "styles/header.css">
 <link rel= "stylesheet" href = "styles/footer.css">
 <script src = "js/thamasha.js"></script>

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
    
<img src = "images/member.jpeg" class = "memberimg"><br><br>

<h1 id = "h_register">Registration</h1><br>

<form action = "registration.php" onsubmit = "return checkPassword()" method = "post">

  <fieldset id = "form_register">
  
  <legend><h2>REGISTER WITH US</h2></legend><br>
  
  <select name="title" id="title">
    <option value="" disabled selected hidden>Title</option>
    <option value="reverend">Rev</option>
    <option value="professor">PROF</option>
	<option value="doctor">Dr</option>
    <option value="honourable">Hon</option>
	<option value="mr">Mr</option>
    <option value="mrs">Mrs</option>
	<option value="miss">Miss</option>
  </select>
  &nbsp; &nbsp; &nbsp;

  <input type="text" name="firstname" id = "fname" placeholder = "First Name" required> &nbsp; &nbsp; &nbsp;

  <input type="text" name="lastname" id = "lname" placeholder = "Last Name" required><br><br>

  <select name="gender" id="gender">
    <option value="" disabled selected hidden>Gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select>
  &nbsp; &nbsp; &nbsp;
  
  Date of Birth <input type="date" name = "dob" id = "dob" required><br><br>
  
  <input type="phone" name="mobileNo" id="mobileNo" placeholder = "Mobile Number" pattern = "[0-9]{10}" required>  &nbsp; &nbsp; &nbsp;
  
  <input type="email" name="email" id="c_email" placeholder = "Email Address" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br><br>

  <input type="password" name="password" placeholder = "Password" id = "psw" title = "Your password should contain uppercase letters, lowercase letters, numbers, minimum 5 and maximum 10 characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" required>&nbsp; &nbsp; &nbsp;

  <input type="password" name="cnfPassword" placeholder = "Re-enter Password" id = "cnfPsw" title = "Your password should contain uppercase letters, lowercase letters, numbers, minimum 5 and maximum 10 characters" required><br><br>

  <input type = "checkbox" name = "terms" id = "checkbox" onclick = "enableButton()"> I agree to the SwiftAir terms and conditions<br><br>

  <input type = "submit" name = "create" value ="Create Account" id="submitBtn" disabled><br><br>
  
  <p class="link">Already have an account? <a href="login.php">Login here</a></p>
  
  </fieldset>
</form>

<?php
	
	if(isset($_POST['create'])){
		$title    = $_POST['title'];
		$firstname= $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender   = $_POST['gender'];
		$dob      = $_POST['dob'];
		$mobileNo = $_POST['mobileNo'];
		$email    = $_POST['email'];
		$password = $_POST['password'];
		
		$stmt = $conn->prepare ("INSERT INTO users (title, firstname, lastname, gender, dob, mobileNo, email, password)VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssss", $title, $firstname, $lastname, $gender, $dob, $mobileNo, $email, $password);
		$result = $stmt->execute();
	
		if($result){
			header("Location: login.php");
			
		}else{
			echo "<div class='form'>
                  <h3>Something went wrong.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>register</a> again.</p>
                  </div>";
		}
        
	}
	?>





<!-- Footer -->

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