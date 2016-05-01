<?php
ini_set('session.cookie_httponly', true);
	session_start();
	include("connection.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
// prevent Session hijacking

if(isset($_SESSION['last_ip']) === false)
{
	$_SESSION['last_ip'] = $_SERVER['REMOTE_ADDR'];
}
if($_SESSION['last_ip'] !== $_SERVER['REMOTE_ADDR'])
{
	session_unset();
	session_destroy();
}


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

			//use inbuilt functions stripslashes and mysql_real_escape to prevent sql injection attacks on login screen
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($db, $username);
			$password = mysqli_real_escape_string($db, $password);
			$password = md5($password);

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