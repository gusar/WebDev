<!DOCTYPE html>
<html>
<head>
	<title>Library - Login</title>
	<link rel="stylesheet" type="text/css" href="library.css">
	<meta charset="UTF-8"> 
	<?php include("header.php"); ?>
</head>
<body>
<div id="containter">

	<div id="body">
		<?php
			if(isset($_GET['r']) && $_GET['r'] == 1) echo "Registration successful";
			
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
				echo "Wrong username or password";
				session_destroy();
			}
			elseif (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
				header("location: index.php");
			}
		?>

		<fieldset>
			<legend>Login</legend>
			<form id="login-form" method="POST" action="loginSQL.php">
				User <br>
				<input type="text" name="user" size="30%">
				<br> Password <br>
				<input type="password" name="pass" size="30%"><br>
				<input id="button" type="submit" name="submit" value="Log-In">
				<br><a id="rlink" name="register" href='register.php'>Register</a>
			</form>
		</fieldset>
	</div>

	<?php include("footer.php"); ?>
</div>
</body>
</html> 
