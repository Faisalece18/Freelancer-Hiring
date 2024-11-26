<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
<style type="text/css">
table {
	
	text-align: center;
	width: 100%;

}
</style>
</head>
<body>
   <table align="center" border="2px solid black" style="border-collapse: collapse;">
   	<tr>
   		<th>Name</th>
   		<th>Email</th>
   		<th>Subject</th>
   		<th>Message</th>
   	</tr>
   

<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM contact";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if ($total!=0) 
{
	
	while ($result = mysqli_fetch_assoc($data)) 
	{
		echo "
		<tr>
			<td>".$result['Name']."</td>
			<td>".$result['Email']."</td>
			<td>".$result['Subject']."</td>
			<td>".$result['Message']."</td>
		</tr>"; 
	}
}
else
{
	echo "No record found";
}
?>
</table>
</body>
</html>