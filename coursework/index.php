<?php
	include('login\login.php'); // Include Login Script

	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: http://yogitha.azurewebsites.net/coursework/login/home.php');
	}	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Login Form with Session</title>
<link rel="stylesheet" href="login/style.css" type="text/css" />
</head>
<nav>
    <ul>
        <li><a href="index.php">Login</a></li>
        <li><a href="registration/register.php">Register</a></li>

    </ul>
</nav>

<body>
<div align="center">
<h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:32px;">PHP Login Form with Session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username" /><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" />  <br><br>
        <input type="submit" name="submit" value="Login" /> 
    </form>
    <div class="error"><?php echo $error;?></div>
</div>
</div>
</body>
</html>