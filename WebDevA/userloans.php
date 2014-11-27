<?php
	include("connectDB.php");

	$result = mysql_query("SELECT bookTitle, author, isbn, reservedDate 
								FROM Reservations, Books 
								WHERE Reservations.reserved_username = '$_SESSION[user]' 
								AND Reservations.reserved_isbn = Books.isbn");
			
	echo '<table id="results"><tr>'."\n";
	$counter = 0;

	while($row = mysql_fetch_row($result)) {
		if($counter != 0 && ($counter%3) == 0 ) {
			echo "</tr><tr>";
		}
		echo "<td><ul><li>Title: ";
		echo ($row[0]);
		echo "</li><li>Author: ";
		echo ($row[1]);
		echo "</li><li>ISBN: ";
		echo ($row[2]);
		echo "</li><li>Date: ";
		echo ($row[3]);
		echo "</li><li>";
		echo "<form method='POST' action='index.php?return=1'>";
		echo "<input type='hidden' name='return' value='$row[2]'>";
		echo "<input type='submit' name='button' value='Return'></form>";
		echo "</li></ul></td>";
		$counter++;
	}
	if($counter == 0) {
		echo "<td><ul><li>No loans at this moment</li></ul></td>";
	}
	echo "</tr>";
	echo "</table>\n";
	mysql_close($conn);
?>