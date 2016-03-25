<?php
	include("check.php");	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1 class="hello">Hello, <em><?php echo $login_user;?>!</em></h1>
<br><br><br>
<tr>
	<!--<td colspan="2">Bugs</td>-->
	<td> <a href="http://yogitha.azurewebsites.net/coursework/bugs/bugs.php">Bugs Home</a> </td>
</tr>
<tr>
	<td>
		<a href="logout.php" style="font-size:18px">Logout?</a>
	</td>
</tr>

</body>
</html>