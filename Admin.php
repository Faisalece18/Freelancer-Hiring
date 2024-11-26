<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<img src="images/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="email" class="input" name="email" placeholder="Email">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	
           		    	<input type="password" class="input" name="password" placeholder="Password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<button class="btn" name="submit" onclick="myFunction()" >LogIn</button>
            	<!-- <input type="submit" class="btn" value="Login" name="submit" onclick="myFunction()"> -->
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
   <?php
	include("connection.php");
    if(isset($_POST['submit']))
    {
    	$email = $_POST['email'];
    	$pwd = $_POST['password'];

    	$query= "SELECT * FROM SIGNUP WHERE EMAIL ='$email' && password ='$pwd'";
    	$data= mysqli_query($conn,$query);
    	$total=mysqli_num_rows($data);
    	//echo $total;
    	if ($total == 1) {
    		echo "Log in ok!";
    		
    		header('location:photoupload.php');
 
    	}
    	else
    	{ ?>
    		<script type="text/javascript">
    			alert("Worng Email/Password")
    		</script>
    		<?php
    		
    	}
    }
   ?> 
      <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>
