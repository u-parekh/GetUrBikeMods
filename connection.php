<?php

$servername="localhost";
$username="root";
$password="";
$db_name="project";
	
	$con=mysqli_connect($servername,$username,$password,$db_name);
	
	if(!$con)
	{
		die("Please check your connection");
	}

?>