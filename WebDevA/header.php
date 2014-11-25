	<div id="header">
		<div id="header_top">
			<strong id="heading">Library</strong>
			<div id="hi">
				<?php
					session_start();
					if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	   				echo "Hi, " . $_SESSION['user'] . "!";
					}
				?>
			</div>
		</div>

		<div id="header_menu">
			<a href="index.php"><img class="buttons" src="index.png" width="65" height="26" alt="Home Page"></a>
			<a href="search.php"><img class="buttons" src="search.png" width="65" height="26" alt="Search"></a> 
			<a href="logout.php"><img class="buttons" src="logout.png" width="65" height="26" alt="Logout"></a> 
		</div>

	</div>