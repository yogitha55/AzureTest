<?php
	session_start();
	include("connection.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
//tp protect from user input
/*function xssafe($data,$encoding='UTF-8')
{
	return htmlspecialchars($data,
		ENT_QUOTES | ENT_HTML401,$encoding);
}*/
//echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');


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

			/*//my sql injection
			$username = stripslashes($username);
			$password = stripslashes($password);
			$usernmae = mysqli_real_escape_string($db, $username);
			$password = mysqli_real_escape_string($db, $password);
			$password = md5($password);*/

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