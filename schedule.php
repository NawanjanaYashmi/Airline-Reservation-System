<?php
include("session.php");
     include_once 'config.php';
?>

<!DOCTYPE html>
<html>
 <head>

 <title>Schedule</title>
   <link rel = "stylesheet" href = "styles/thamasha.css">
   <link rel= "stylesheet" href = "styles/header.css">
   <link rel= "stylesheet" href = "styles/footer.css">
 
 <style>
 table{
	 border-collapse:separate; 
     border-spacing: 0 15px; 
	 border: 3px solid blue;
	 margin-left:100px;
	 width:70%;
     background-color: #44b09e;
     background-image: linear-gradient(315deg, #44b09e 0%, #e0d2c7 74%);
 }
 
 th{
	 text-align:left;
	 border-bottom: 5px solid #000;
	 font-size:20px;
 }
 
 td{
	 border-bottom: 2px solid #666;
	 font-size:17px;
 }
 tr:hover {background-color: white;}
 </style>
 
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
 
<img src = "images/travel.jpg" alt = "plane" width = "1141px" height = "400px" style = "margin-left:100px">

<h1 id="h_schedule">Flight Schedule</h1><br>

<form action="" method="post">
<fieldset id = "form_schedule" style = "background-color: #44b09e; background-image: linear-gradient(315deg, #44b09e 0%, #e0d2c7 74%)">

  <b style = "font-size:20px">Origin</b>
  <select name="origin" id="origin">
    <option value="" disabled selected hidden>--From Where--</option>
    <option value="cmb">Colombo - Sri Lanka (CMB)</option>
    <option value="jfk">New York - United States (JFK)</option>
    <option value="hnd">Tokyo - Japan (HND)</option>
	<option value="dxb">Dubai - United Arab Emirates (DXB)</option>
  </select>
  &nbsp; &nbsp; &nbsp;
 
  <b style = "font-size:20px">Destination</b>
  <select name="destination" id="destination">
    <option value="" disabled selected hidden>--To Where--</option>
    <option value="cmb">Colombo - Sri Lanka (CMB)</option>
    <option value="jfk">New York - United States (JFK)</option>
    <option value="hnd">Tokyo - Japan (HND)</option>
	<option value="dxb">Dubai - United Arab Emirates (DXB)</option>
  </select>
  &nbsp; &nbsp; &nbsp;
  
  <input type = "button" name ="search" value = "Search" id = "search_sche"><br><br>
  </fieldset>
  </form><br>

<?php
    
	if(isset($_POST['search'])){
		
        $origin = $_POST['origin'];
	    $destination = $_POST['destination'];		
	}
	
    $sqlget = "SELECT flightNo, origin, destination, day, depTime FROM schedule";
	
	//$sqlget = "SELECT flightNo, origin, destination, day, depTime FROM schedule	origin = '$origin' AND destination = '$destination'";
	
    $sqldata = mysqli_query($conn, $sqlget) or die ('error getting data');
	
	echo "<table>";
	
	echo "<tr><th>Flight No</th><th>Origin</th><th>Destination</th><th>Day</th><th>DepartureTime</th></tr>";
         
	while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
		echo "<tr><td>";
		echo $row['flightNo'];
		echo "</td><td>";
        echo $row['origin'];
		echo "</td><td>";
        echo $row['destination'];
        echo "</td><td>";		
        echo $row['day'];
        echo "</td><td>";	
        echo $row['depTime'];
		echo "</td><td>";
	}
	
	echo "</table>";
	
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