<?php

$servername="localhost";
$username="root";
$password="";
$dbname="project";

$conn =mysqli_connect($servername,$username,$password,$dbname);
if ($conn) {
	//echo "Connection Ok!";
}
else 
    {
    	echo "Connection Failed".mysql_connect_error();
    }
?>