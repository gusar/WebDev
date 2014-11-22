<?php include("header.php"); ?>

	<div id="body-login-register">
		<?php
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
				echo "Wrong username or password";
			}
			elseif (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
				header("location: index.php");
			}
		?>

		<fieldset>
			<legend>Login</legend>
			<form method="POST" action="loginSQL.php">
				User <br>
				<input type="text" name="user" size="33">
				<br> Password <br>
				<input type="password" name="pass" size="33"><br>
				<input id="button" type="submit" name="submit" value="Log-In">
				<br><a id="rlink" name="register" href='register.php'>Register</a>
			</form>
		</fieldset>
	</div>

</body>
</html>
