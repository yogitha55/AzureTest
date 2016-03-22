<?php
	session_start();
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

			// To protect from MySQL injection
			$username = stripslashes($username);
			$password = stripslashes($password);
			//$username = mysqli_real_escape_string($db, $username);
			//$password = mysqli_real_escape_string($db, $password);

			$password = md5($password);

			$username = str_replace(' ', '', $username);
			$password = str_replace(' ', '', $password);



			//Check username and password from database
			$sql="SELECT userID FROM users WHERE username='$username' and password='$password'";
			//$sql="SELECT userID FROM users WHERE username='pra' and password='bcbe3365e6ac95ea2c0343a2395834dd'";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC) ;
			//$result = mysqli_query("SELECT email FROM users WHERE userName='$username' and password = '$password'");
			//$count  = mysql_num_rows($result);


				//If username and password exist in our database then create a session.
			//Otherwise echo error.
			


			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['username'] = $username; // Initializing Session
				header("location: http://yogitha.azurewebsites.net/coursework/login/home.php"); // Redirecting To Other Page
			}

			else
			{
				$error = "Incorrect username or password.";
			}



		}
	}

?>