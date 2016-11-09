<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$connection = mysql_connect("localhost" , "dig4530c_012" , "knights123!");  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect. 
	mysql_select_db("dig4530c_012" , $connection);
	
	if(isset($username) && isset($password)){
		$query = "SELECT username, password FROM users WHERE username='" . $username . "' AND password='" . sha1($password) . "'";
		$sql = mysql_fetch_assoc(mysql_query($query));
		
		if($sql['username']=="Admin" && $sql['password']==sha1("high^five")){
			session_start();
			$_SESSION["access_level"]=0;
			header("Location: http://sulley.cah.ucf.edu/~dig4530c_012/steven_edits/admin.php");
		}
		
		else if($sql['username']=="Super" && $sql['password']==sha1("UPPER~CASE")){
			session_start();
			$_SESSION["access_level"]=1;
			header("Location: http://sulley.cah.ucf.edu/~dig4530c_012/steven_edits/client.php");
		}
		
		else if($username!=null && password!=null){
			session_start();
			$_SESSION["access_level"]=2;
			header("Location: http://sulley.cah.ucf.edu/~dig4530c_012/steven_edits/home.php");
		}
		
		else if($username==null && password==null){
			echo("Invalid login.");
			header("Location: http://sulley.cah.ucf.edu/~dig4530c_012/steven_edits/sign_in.php");
		}
	}
	else{
		header("Location: http://sulley.cah.ucf.edu/~dig4530c_012/steven_edits/sign_in.php");
	}
?>