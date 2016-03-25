<?php

	include("connection.php");
	include("submit.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<form method="post" action="">
		<fieldset>
		<legend>Registration Form</legend>
			<table>
				<tr>
					<td colspan="2" align="centre" class="error"><?php echo $msg;?></td>
				</tr>
				<tr>
					<td colspan="2">Already Registered?</td>
					<td> <a href="http://yogitha.azurewebsites.net/coursework/index.php">Login Now</a> </td>
				</tr>
				<tr>
					<td style="font-weight: bold">
						<div align="right"><label for="userId">UserId</label></div>
					</td>
					<td>
						<input name="userid" type="number" class="input" size="25" required />
					</td>
				</tr>
				<tr>
					<td style="font-weight: bold">
							<div align="right"><label for="name">Username</label></div>
					</td>
					<td>
							<input name="name" type="text" class="input" size="25" required />
					</td>
				</tr>
				<tr>
					<td style="font-weight: bold">
							<div align="right">
									<label for="email">Email</label>
							</div>
					</td>
					<td>
							<input name="email" type="email" class="input" size="25" required />
					</td>
				</tr>
				<tr>
					<td style="font-weight: bold">
						<div align="right">
							<label for="phone">PhoneNumber</label>
						</div>
					</td>
					<td>
						<input name="phone" type="number" class="input" size="11" />
					</td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold">
							<div align="right">
								<label for="password">Password</label>
							</div>
					</td>
					<td>
							<input name="password" type="password" class="input" size="25" required />
					</td>
				</tr>
				<tr>
					<td height="23"></td>
					<td>
						<div align="right">
				  		<input type="submit" name="submit" value="Register" />
						</div>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
