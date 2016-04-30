<?php
//ini_set('session.cookie_httponly', true);
	session_start();
	include("connection.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.

if($_SESSION['timeout'] + 60 < time()) {
	//session timed out
	session_destroy();
	Header("Location:login.php");
}
else{
	$_SESSION['timeout'] = time();
}

/*if(isset($_SESSION['last_ip']) === false)
{
	$_SESSION['last_ip'] = $_SERVER['REMOTE_ADDR'];
}
if($_SESSION['last_ip'] !== $_SERVER['REMOTE_ADDR'])
{
	session_unset();
	session_destroy();
}*/


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

			//session hijacking
		//	$_SESSION["username"] = $_POST["username"];
		//	$_SESSION['last_login_timestamp'] = time();
		//	header("location:index.php");

			//my sql injection
			$username = stripslashes($username);
			$password = stripslashes($password);
			$usernmae = mysqli_real_escape_string($db, $username);
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
			/*//creating procedure
			if(!$mysqli->query("DROP PROCEDURE IF EXISTS p") ||
				!$mysqli->query("CREATE PROCEDURE p(IN id_val INT) BEGIN INSERT INTO test(id) VALUES(id_val); END;"))
			{
				echo "Stored procedure creation failed: (" . $mysqli->errno . ")" . $mysqli->error;
			}
			//call the procedure with parameter
			if(!$mysqli->query("CALL p(1)"))
			{
				echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
			}*/

		}

		//function validate($string){

		//	return htmlspecialchars($string,ENT_QUOTES,'UTF-8');

//		}



}

?>