<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="library.css">
	<meta charset="UTF-8"> 
	<?php include("header.php"); ?>
</head>
<body>
<div id="containter">

<div id="body">
	<form id="register-form" action="register.php" method="post">

		<h2 style="text-align:center">Registration</h2>

		<!-- Checks if user pressed register button, and initiates reg script -->
		<p><?php include("registerSQL.php"); ?></p>

		<table id="register-table" border="0">
			<tr>
				<td>Username:</td>
				<td><input name="rusername" maxlength="20" type="text" size="25"></input> *</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input name="rpassword1" maxlength="6" type="password" size="25"></input> *</td>
			</tr>
			<tr>
				<td>Retype Password:</td>
				<td><input name="rpassword2" maxlength="6" type="password" size="25"></input> *</td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input name="rfirstname" maxlength="30" type="text" size="25"></input> *</td>
			</tr>
			<tr>
				<td>Surname:</td>
				<td><input name="rsurname" maxlength="30" type="text" size="25"></input> *</td>
			</tr>
			<tr>
				<td>Address Line 1:</td>
				<td><input name="raddressline1" maxlength="40" type="text" size="25"></input> *</td>
			</tr>
			<tr>
				<td>Address Line 2:</td>
				<td><input name="raddressline2" maxlength="40" type="text" size="25"></input></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input name="rcity" maxlength="20" type="text" size="25"> *</input></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input name="rtelephone" maxlength="10" type="text" size="25"> *</input></td>
			</tr>
			<tr>
				<td>Mobile:</td>
				<td><input name="rmobile" maxlength="10" type="text" size="25"></input></td>
			</tr>
			<tr><td colspan="2" id="reg-submit">
				<input type="submit" name="register" value="Register"></input>
			</td></tr>
		</table>

	</form>	
</div>

<?php include("footer.php"); ?>
</div>
</body>
</html> 
