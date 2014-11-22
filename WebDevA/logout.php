	<?php	include("header.php"); ?>

	<div id="body-logout">
		<?php include("checksession.php"); ?>
		<?php 
			if(session_destroy()) {
				echo "You have logged out successfully";
			}
		?>
		
		<br><br><a id="login" name="Login" href='login.php'>Login</a><br>

	</div>

</body>
</html> 