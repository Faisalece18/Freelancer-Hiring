<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <script src="js/nav.js"></script>
<link rel="stylesheet" type="text/css" href="css/album.css">
 <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/sh4hids/bangla-web-fonts/bensen-handwriting/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.staticaly.com/gh/sh4hids/bangla-web-fonts/9baee0fc23e77fe957c0b70fe49d81d2cbbe87d6/boshonto/stylesheet.css">
</head>
<body>


    
    <div class="scroll-up-btn">
        <i class="show"></i>
    </div>
<nav class="navbar">
        <div class="max-width">
            <div class="logo">
<a href="index.php"><p >Faisal<span> Hossain</span></p></a></div>
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
 <br><br><br><br><br><br><br>
    
 
    <div>
  <div class="gallery">
<?php

include("connection.php");

error_reporting(0);
$query="select * from gallery";
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if ($total!=0) 
{   

    while ($result=mysqli_fetch_assoc($data)) {
?>
      <a href="<?php echo $result['picsource']; ?>" data-lightbox="example-set"> <img src="<?php echo $result['picsource']; ?>"></a>

<?php        
}
}
?>


  
  </div>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>
