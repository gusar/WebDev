	<?php
		/* Check if session has been started, if not: start one */
		if (session_status() == PHP_SESSION_NONE) {
    		session_start();
		}

		if ((!isset($_SESSION['loggedin'])) 
		|| (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false)) {
			header("location: login.php");
		}
	?>