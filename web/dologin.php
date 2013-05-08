<?php

	require_once("./tools/LoginManager.class.php");

	session_start();
	$_SESSION['invalidlogin'] = false;
	
	// reset any set username information
	if( isset($_SESSION['email']) )
	{
		unset($_SESSION['email']);
		unset($_SESSION['loggedin']);
		unset($_SESSION['invalidlogin']);
	}
	
	// get post data
	$email = $_POST['myemail'];
	$password = $_POST['mypassword'];
	
	//echo "email: " . $email . "</br>";
	//echo "password: " . $password . "</br>";
	
	// get user validation
	$loginmgr = new LoginManager();
	$credentials = $loginmgr->CheckCredentials($email,$password);
	
	if( $credentials->valid == false )
	{
		// unsuccessful, invalid login credentials
		
		//echo "invalid!";
		
		$_SESSION['invalidlogin'] = true;
		$_SESSION['loggedin'] = false;
		
		header("location: login.php");
	}
	else
	{
		// success!
		
		//echo "valid!";
		
		$_SESSION['email'] = $email;
		$_SESSION['displayname'] = $displayname;
		$_SESSION['loggedin'] = true;
		// redirect to the dashboard (main page).
		header("location: albums.php");
	}
	
?>