<?php

	$username = "dig4530c_012";
	$password = "knights123!";
	
	$connection = mysqli_connect("localhost" , "$username" , "$password") or die ("could not connect to mysql");  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect. 
	mysqli_select_db($connection , "dig4530c_012");
	
?>