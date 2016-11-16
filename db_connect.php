<?php
	
//DB details
$dbHost = 'localhost';
$dbUsername = 'dig4530c_012';
$dbPassword = 'knights123!';
$dbName = 'dig4530c_012';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
	
	if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
	}
?>