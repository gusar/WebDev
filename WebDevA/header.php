<!DOCTYPE html>
<html>
<head>
	<title>Library</title>
	<link rel="stylesheet" type="text/css" href="library.css">
</head>
<body>

	<div id="header">
		<div id="header_top">
			<strong id="heading">Library</strong>
		</div>

		<div id="header_menu">
			<a href="index.php"><img class="buttons" src="index.png" alt="Home Page"></a>
			<a href="search.php"><img class="buttons" src="search.png" alt="Search"></a> 
			<a href="logout.php"><img class="buttons" src="logout.png" alt="Logout"></a> 
		</div>

		<div id="hi">
				<?php
					session_start();
					if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
   					echo "Hi, " . $_SESSION['user'] . "!";
					}
				?>
		</div>
	</div>