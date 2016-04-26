<?php
session_start();
//session hijacking
if($_SESSION['timeout'] + 60 < time())
{
	//session timed out
	session.destroy();
	Header("Location:login.php");
}
else{
	$_SESSION['timeout'] = time();
	//session ok reset time
}
include("connection.php"); //Establishing connection with our database

$error = ""; //Variable for storing our errors.
if(isset($_POST["submit"]))
{
	if(empty($_POST["username"]) || empty($_POST["password"]))
	{
		$error = "Both fields are required.";
	}else
	{
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];



		//Check username and password from database
		$sql="SELECT userID FROM users WHERE username='$username' and password='$password'";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC) ;

		//If username and password exist in our database then create a session.
		//Otherwise echo error.

		if(mysqli_num_rows($result) == 1)
		{
			$_SESSION['username'] = $username; // Initializing Session
			header("location: photos.php"); // Redirecting To Other Page
		}else
		{
			$error = "Incorrect username or password.";
		}

	}
}

?>