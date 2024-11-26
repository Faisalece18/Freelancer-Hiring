<?php
include("connection.php");
error_reporting(0);
  
?>
<!DOCTYPE html>
<html>
<head> 
	<title>Photo Upload</title>
</head>
<body>
   <form action="" method="POST" enctype="multipart/form-data">
   	<input type="file" name="uploadfile"><br><br>
   	<input type="submit" value="Upload" name="submit"><br><br><br>
    <input type="submit" name="message" value="Message"><br><br><br>
    <input type="submit" name="logout" value="Logout">
   </form>
   <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder="gallery/".$filename;
move_uploaded_file($tempname,$folder);
if ($filename!="") {
	

 
	$query=" INSERT INTO GALLERY(picsource) VALUES ('$folder')";
$data= mysqli_query($conn,$query);
if ($data) 
{

	echo "Inserted";
}
}
else
{
	echo "Failed";
}
}
if(isset($_POST['message']))
{ 
  header('location:display.php');
}
if(isset($_POST['logout']))
{ 
  header('location:logout.php');
}

?>