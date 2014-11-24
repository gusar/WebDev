<?php
if(!isset($_GET['search']) && !isset($_GET['s'])) {
	echo '<tr><td colspan="6">Ready to search</td></tr>';
	echo "</table>";
}

else {
	include("connectDB.php");

	if(isset($_GET['search'])) $search = $_GET['search'];
	else $search = $_GET['s'];

	if(!isset($_GET['start'])) $start = 0;
	else $start = $_GET['start'];

	$limit = 5; 
	$cur = ($start - 0);
	$this1 = $cur + $limit;
	$back = $cur - $limit;
	$next = $cur + $limit;

	$query = "SELECT * FROM Books WHERE (isbn LIKE '%$search%' 
								OR bookTitle LIKE '%$search%' OR author LIKE '%$search%' 
								OR edition LIKE '%$search%' OR year LIKE '%$search%')";

	if(isset($_GET['cat']) && $_GET['cat'] != 0) {
		$cat = (int)$_GET['cat'];
		$query = $query." AND categoryID=".$cat;
	}
	else $cat = 0;

	$search_result = mysql_query($query);
	$num_rows = mysql_num_rows($search_result);

	if($num_rows<1) {
		echo '<tr><td colspan="6">No Results</td></tr>';
		echo "</table>";
	}

	$search_result = mysql_query($query." LIMIT $cur, $limit");


	while($row = mysql_fetch_row($search_result)) {
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
		echo "</td><td>";
		if($row[6] == "N") {
			echo "<form method='POST' action='index.php'>";
			echo "<input type='hidden' name='reserve' value='".$row[0]."'>";
			echo "<input type='submit' name='button' value='Reserve'></form>";
		}
		else echo "Not available";
		echo("</td></tr>");
	}
	echo "</table>";

	echo '<table id="table-nav" border="0"><td>';
	if($back >= 0) {
		print "<a href='search.php?start=$back&s=$search&cat=$cat'>PREV</a>";
	}
	echo '</td><td>';
	echo ($this1/5);
	echo "</td><td>";
	if($this1 < $num_rows) {
		print "<a href='search.php?start=$next&s=$search&cat=$cat'>NEXT</a>";
	}
	echo "</td></tr></table>";

	mysql_close($conn);
}
?>