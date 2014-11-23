<?php
	$HOST = 'localhost';
	$UNAME = 'root';
	$PASS = "";
	$DBNAME = 'library';

	$conn = mysql_connect($HOST, $UNAME, $PASS) 
		or die("MySQL connection error: " .mysql_error());
	mysql_select_db($DBNAME, $conn) 
		or die("No such database: " .mysql_error());
?>
