<!DOCTYPE html>
<html>
<head>
	<title>Home area</title>
	<link rel="stylesheet" type="text/css" href="library.css">
	<meta charset="UTF-8"> 
	<?php 
		include("header.php");
		include("checksession.php"); 
		include("reservations.php");
	?>
</head>
<body>
<div id="containter">
	
	<div id="body">
		<h2>Reserved Books</h2>
		<?php include("userloans.php"); ?>
	</div>

	<?php include("footer.php"); ?>
</div>
</body>
</html> 