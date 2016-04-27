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
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$query = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?, ?)");
$query->bind_param("sss", $username, $email, $password);
//$query = $mysqli_query->prepare($db, "INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
//$query->bind_param("sss", $username, $email, $password);

// set parameters and execute
$username = "Nanu";
$password = "nanu";
$query->execute();

$username = "Budugu";
$password = "hello";
$query->execute();

$username = "Tata";
$password = "super";
$query->execute();

echo "New records created successfully";

$query->close();
$db->close();


}

?>