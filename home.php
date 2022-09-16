<?php
include_once'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
	<link rel = "stylesheet" href = "styles/dulmini.css">
    <link rel= "stylesheet" href = "styles/footer.css">
	<link rel= "stylesheet" href = "styles/header.css">
	<script src = "js/dulmini.js"></script>
    
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


<div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 5</div>
            <img src="https://img.etimg.com/thumb/msid-85392315,width-1200,height-900,imgsize-247146,overlay-economictimes/photo.jpg"
                style="width:100%" height="700">
            <div class="text">SWIFT AIR</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 5</div>
            <img src="https://i.kinja-img.com/gawker-media/image/upload/t_original/sssmumyvtstzdpehfkej.jpg"
                style="width:100%" height="700">
            <div class="text">SWIFT AIR</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
            <img src="https://eskipaper.com/images/airplane-1.jpg" style="width:100%" height="700">
            <div class="text">SWIFT AIR</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="https://dnanews.com.pk/wp-content/uploads/2017/03/33.jpg" style="width:100%" height="700">
            <div class="text">SWIFT AIR</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Austrian_Airlines_flight_attendant_and_passenger.jpg/1200px-Austrian_Airlines_flight_attendant_and_passenger.jpg"
                style="width:100%" height="700">
            <div class="text">SWIFT AIR</div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>

    



    <pre><h2 style="color: rgb(7, 63, 63); font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> Top destinations</h2></pre>
    
        <div class="mainmenu" style="background-color: rgb(253, 255, 255);">
        
        <ul class="menu">
            <li>
                <a href="https://www.tourismthailand.org/home">
                    <img id="#img"
                        src="https://www.traveldailymedia.com/assets/2021/08/shutterstock_1008532504-scaled-e1629803722783.jpg"
                        height="200" width="200">
                    <p id="p1">Thailand</p>
                </a>
            </li>

            <li>
                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwi_44iVv7PzAhXYcn0KHaNPAFoQFnoECAUQAQ&url=https%3A%2F%2Fwww.srilanka.travel%2F&usg=AOvVaw2iXOAQXW0zjnViymEvf51l">
                    <img id="#img" src="https://i.ytimg.com/vi/q0mbKsKG-ng/maxresdefault.jpg" height="200" width="200">
                    <p id="p1">Sri lanka</p>
                </a>
            </li>
            <li>
                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjZmv-kv7PzAhXDWisKHbtLCycQFnoECAsQAQ&url=https%3A%2F%2Fvisitmaldives.com%2F&usg=AOvVaw1YbDUrZs-xVZUyOmOIh7Kq">
                    <img id="#img"
                        src="https://media.cntraveler.com/photos/612d21374462ca8ecf323194/16:9/w_1280,c_limit/LICENSE_Mohamed%2520Ryan%2520Thoyyib_Maldives_(c)%2520GettyImages-999086864_CNT%2520(US)_Andrea%2520Edelman.jpg"
                        height="200" width="200">
                    <p id="p1">Maldives</p>
                </a>
            </li>
            <li>
                <a href="https://www.japan.travel/en/">
                    <img id="#img"
                        src="https://media.cntraveler.com/photos/58d2b8bb1021b64be0979496/master/w_2048,h_1536,c_limit/nachi-shrine-japan-GettyImages-640039952.jpg"
                        height="200" width="200">
                    <p id="p1">Japan</p>
                </a>
            </li>
            <li>
                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwiHrqy0v7PzAhWIWisKHW3HAncQFnoECA0QAQ&url=https%3A%2F%2Fwww.nycgo.com%2F&usg=AOvVaw3w0r-GZtYq1M4sIeqU4Suz">
                    <img id="#img"
                        src="https://static.onecms.io/wp-content/uploads/sites/28/2021/02/19/new-york-city-evening-NYCTG0221.jpg"
                        height="200" width="200">
                    <p id="p1">Newyork </p>
                </a>
            </li>
            <li>
                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjStNzIv7PzAhXnuksFHdWRDnEQFnoECAUQAQ&url=https%3A%2F%2Fenglish.www.gov.cn%2Fservices%2Fvisitchina%2F&usg=AOvVaw3nYhzj4e6Z5BK3P2cp05Ez">
                    <img id="#img" src="https://pix10.agoda.net/geo/country/191/3_191_china_02.jpg?s=1920x" height="200"
                        width="200">
                    <p id="p1">China</p>
                </a>
            </li>

        </ul>
 
    </div>


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
