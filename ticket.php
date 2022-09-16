<?php
include("session.php");
include_once'config.php';
?>

<!DOCTYPE html>
<html>
    <head>
<title>SwiftAir</title>
   <link rel = "stylesheet" href = "styles/ticket.css">
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

    

        <h1 id="h1a" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Print Flight Ticket</h1>
     
        
        <br>
        <pre><img src="https://www.pngitem.com/pimgs/m/51-519342_ticket-clip-art-plane-tickets-clipart-png-transparent.png" height="440px" width="550px" align="left" ></pre> 
    
<br>
<br>
<br>
<br>

<div style="text-align: center; color: rgb(0, 3, 3); font-size: 25px;">
    <h2 id="h2a"> Choose File Type</h2>
    <form action="/actionpage.php">
        <input type="radio" id="PDF" name="filetype" value="pdf" >
        <label for="PDF">PDF</label><br>
        <input type="radio" id="Jpg" name="filetype" value="jpg">
        <label for="Jpg">Jpg</label><br>
        <input type="radio" id="Docx" name="filetype" value="docx">
        <label for="Docx">Docx</label><br>
        <input type="radio" id="RAR" name="filetype" value="rar">
        <label for="RAR">RAR</label><br>
<br>
        <input type="submit" value="OK" class="button-style">

    </form>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="deval" >
    <h2>Next Steps</h2>
<ol type="1"  >
    <li ><a href="#">Download your ticket</a></li>
        <li>Print it</li>
        <li>Present at check-in,if asked</li>
    </ol>
</div>

<br>








<!-- Footer -->


<section class="footer">
        <div class="row">
            <div class="footcol"  >
            <pre><pre><p id="p2">Contact US<br><br>Mailing Adress<br></p></pre></pre>
            <pre><p id="p3">No 16,<br>Swift Air,<br>Colombo,<br>Sri Lanka</p></pre>
                    
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
            <div class="footcol">
                <pre><p id="p2">Follow Us <br></p></pre>
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" height="20" width="20"> Facebook<br>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/768px-Instagram_logo_2016.svg.png" height="20" width="20">Instagram<br>
                <img src="https://toppng.com/uploads/preview/twitter-logo-icon-social-media-icon-png-and-vector-twitter-logo-png-vector-11562867823o7sjvkzjin.png" height="20" width="20">Twitter
            </div>
        </div>
    
    
    </body>
</html>