<!DOCTYPE html>
<html>
<head>
	<title>Library - Logout</title>
	<link rel="stylesheet" type="text/css" href="library.css">
	<meta charset="UTF-8"> 
	<?php	include("header.php"); ?>
</head>
<body>
<div id="containter">

<!-- Logout user and destroy session -->
	<div id="body">
		<?php include("checksession.php");
			if(session_destroy()) {
				echo "You have logged out successfully";
			}
		?>
		<br><br><a id="login" name="Login" href='login.php'>Login</a><br>
	</div>

	<?php include("footer.php"); ?>
</div>
</body>
</html> 