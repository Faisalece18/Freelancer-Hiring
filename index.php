<?php
include("connection.php");
error_reporting(0);
?>
<?php
if(isset($_POST['submit']))
{
    if(!empty($_POST['name']) && ($_POST['email']) && ($_POST['subject']) && ($_POST['message']))
      {
$nm=$_POST['name'];
$em=$_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['message'];

      }
$query="INSERT INTO CONTACT(NAME,EMAIL,SUBJECT,MESSAGE) VALUES ('$nm','$em','$sub','$msg')";
$data=mysqli_query($conn,$query);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <script src="js/script.js"></script>
 
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
<nav class="navbar">
        <div class="max-width">
            <div class="logo">
<a href="#">Faisal<span> Hossain.</span></a></div>
<ul class="menu">
<li><a href="#home" class="menu-btn">Home</a></li>
<li><a href="#about" class="menu-btn">About</a></li>
<li><a href="photoalbum.php" class="menu-btn" target="_blank">Photos</a></li>
<li><a href="#services" class="menu-btn">Services</a></li>
<li><a href="#skills" class="menu-btn">Skills</a></li>
<li><a href="#teams" class="menu-btn">Teams</a></li>
<li><a href="#contact" class="menu-btn">Contact</a></li>
<li><a href="admin.php" target="_blank" class="menu-btn">Login</a></li>
</ul>
<div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
</div>
</nav>
 
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">
Hello, my name is</div>
<div class="text-2">
Faisal</div>
<div class="text-3">
And I'm a <span class="typing"></span></div>
<a href="#contact">Hire me</a>
            </div>
</div>
</section>
 
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">
About me</h2>
<div class="about-content">
                <div class="column left">
                    <img src="images/abc.jpg" alt="">
                </div>
<div class="column right">
                    <div class="text">
I'm Faisal and I'm a <span class="typing-2"></span></div>
<p>
I'm a student of ECE discipline under Rajshahi University of Engineering and Technology. I'm always energetic to learn new skills  and use creative approach in solving problems. I love to be always on time for organised events and able to handle multiple tasks. I have a clear logical mind to see things through to conpletion. I am eager to be challenged in order to grow and further improve my IT skills.</p>
<a href="CV/My CV.pdf" target="_blank">Download CV</a>
                </div>
</div>
</div>
</section>
 
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">
My services</h2>
<div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">
Web Design</div>
<p>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">
Advertising</div>
<p>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">
Apps Design</div>
<p>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
</div>
</div>
</div>
</div>
</div>
</section>
 
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">
My skills</h2>
<div class="skills-content">
    <div class="column left">
        <div class="text">
            My creative skills & experiences.
        </div>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>
    </p>
    <button onclick="read()" id="myBtn">Read more</button>
<script type="text/javascript">
       function read() 
  {
     var dots = document.getElementById("dots");
     var moreText = document.getElementById("more");
     var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") 
    {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } 
    else 
    {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
  }
</script>
</div>
<div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
<div class="line html">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
<div class="line css">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
<div class="line js">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
<div class="line php">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
<div class="line mysql">
</div>
</div>
</div>
</div>
</div>
</section>
 
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">
My teams</h2>
<div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/abc.jpg" alt="">
                        <div class="text">
Irsal Hossain</div>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <img src="images/saf.jpg" alt="">
                        <div class="text">
Shafayet Tazoar</div>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <img src="images/ovi.jpg" alt="">
                        <div class="text">
Ovishek Mahant</div>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <img src="images/abc.jpg" alt="">
                        <div class="text">
Faisal Raquib</div>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <img src="images/abd.jpg" alt="">
                        <div class="text">
Irsal Labib</div>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
</div>
</div>
</div>
</section>
 
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">
Contact me</h2>
<div class="contact-content">
                <div class="column left">
                    <div class="text">
Get in Touch</div>
<p>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
<div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">
Name</div>
<div class="sub-title">
Faisal Hossain</div>
</div>
</div>
<div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">
Address</div>
<div class="sub-title">
Chittagong, Bangladesh</div>
</div>
</div>
<div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">
Email</div>
<div class="sub-title">
raquib14358@gmail.com</div>
</div>
</div>
</div>
</div>
<div class="column right">
                    <div class="text">
Message me</div>
<form action="#" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" name="name" required>
                            </div>
<div class="field email">
                                <input type="email" placeholder="Email" name="email" required>
                            </div>
</div>
<div class="field">
                            <input type="text" placeholder="Subject" name="subject" required>
                        </div>
<div class="field textarea">
                            <input type="text" name="message" cols="30" rows="10" placeholder="Message.." required>
                        </div>
<div class="button">
                            	   <button type="submit" name="submit" onclick="myFunction()">Send message</button>
                            	

							<script>
								function myFunction() {
 						    	alert("Your Message Sent Successfully");
							 }
							</script>
                        </div>
</form>
</div>
</div>
</div>
</section>
 
    <footer>
        <span>Created By <a href="#">Faisal</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>
