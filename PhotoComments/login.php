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


		/*//tp protect from user input
		function xssafe($data,$encoding='UTF-8')
		{
			return htmlspecialchars($data,
				ENT_QUOTES |ENT_HTML401,$encoding);
		}*/

		//build throttle settings array. (# recent failed logins => response).

		$throttle_settings = [

			50 => 2,            //delay in seconds
			150 => 4,           //delay in seconds
			300 => 'captcha'    //captcha
		];


		$BFBresponse = BruteForceBlocker::getLoginStatus($throttle_settings);

//$throttle_settings is an optional parameter. if it's not included,the default settings array in BruteForceBlocker.php will be used

		switch ($BFBresponse['status']){

			case 'safe':
				//safe to login
				break;
			case 'error':
				//error occured. get message
				$error_message = $BFBresponse['message'];
				break;
			case 'delay':
				//time delay required before next login
				$remaining_delay_in_seconds = $BFBresponse['message'];
				break;
			case 'captcha':
				//captcha required
				break;

		}

}

?>