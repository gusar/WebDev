<?php
	echo "Users:\n";
	echo '<table border="1">'."\n";
	$db = mysql_connect('localhost', 'root') or die(mysql_error());
	mysql_select_db("LabDb") or die(mysql_error());
	$result = mysql_query("SELECT UserID, UserName, Pass, FirstName, LastName FROM User");
	while($row = mysql_fetch_row($result)) {
		echo "<tr><td>";
		echo($row[0]);
		echo "</td><td>";
		echo($row[1]);
		echo "</td><td>";
		echo($row[2]);
		echo "</td><td>";
		echo($row[3]);
		echo "</td><td>";
		echo($row[4]);
		echo("</tr>\n");
	}
	echo "</table>\n";

	echo "Products:\n";
	echo '<table border="1">'."\n";
	$result = mysql_query("SELECT ProductID, ProductName, Description, Price, Stock FROM Product");
	while($row = mysql_fetch_row($result)) {
		echo "<tr><td>";
		echo($row[0]);
		echo "</td><td>";
		echo($row[1]);
		echo "</td><td>";
		echo($row[2]);
		echo "</td><td>";
		echo "$";
		echo($row[3]);
		echo "</td><td>";
		echo($row[4]);
		echo("</tr>\n");
	}
	echo "</table>\n";

	mysql_close($db);
?>