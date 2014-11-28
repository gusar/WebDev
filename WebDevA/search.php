<!DOCTYPE html>
<html>
<head>
	<title>Library search</title>
	<link rel="stylesheet" type="text/css" href="library.css">
	<meta charset="UTF-8"> 
	<?php include("header.php"); ?>
</head>
<body>
<div id="containter">

	<div id="body">
		<?php include("checksession.php"); ?>

		<h2>Search Options</h2>

		<!-- Form includes all search options -->
		<form id="search-form" method="GET" action="search.php">
			Search:
			<input id="search-field" name="search" type="text" size="20"></input>
			<br>Categories:<br>
		<table id="search-table" border="0">
			<tr>
				<td>Health</td><td>
					<input name="cat" type="radio" value=1></input></td>
				<td>Business</td><td>
					<input name="cat" type="radio" value=2></input></td>
				<td>Biography</td><td>
					<input name="cat" type="radio" value=3></input></td>
				<td>Technology</td><td>
					<input name="cat" type="radio" value=4></input></td>
			</tr>
			<tr>
				<td>Travel</td><td>
					<input name="cat" type="radio" value=5></input></td>
				<td>Self-Help</td><td>
					<input name="cat" type="radio" value=6></input></td>
				<td>Cookery</td><td>
					<input name="cat" type="radio" value=7></input></td>
				<td>Fiction</td><td>
					<input name="cat" type="radio" value=8></input></td>
			</tr>
		</table>
		<input id="search-button" type="submit" name="submit" value="Search">
		</form>
	
	<!-- Results table -->
	<div>
		<table id="search-results" border="1" border-collapse="collapse">
		<tr><th>ISBN</th>
		<th>TITLE</th>
		<th>AUTHOR</th>
		<th>EDITION</th>
		<th>YEAR</th>
		<th>OPTION</th></tr>
		<!-- Handle search user input -->
		<?php include("searchSQL.php"); ?>
	</div>
	</div>

	<?php include("footer.php"); ?>
</div>
</body>
</html> 