<?php
/* Check if search has been initiated */
if(!isset($_GET['search']) && !isset($_GET['s'])) {
	echo '<tr><td colspan="6">Use options above or hit search button for a full list</td></tr>';
	echo "</table>";
}

/* Execute code if user pressed search */
else {
	include("connectDB.php");

	if(isset($_GET['search'])) $search = $_GET['search'];
	else $search = $_GET['s'];

	if(!isset($_GET['start'])) $start = 0;
	else $start = $_GET['start'];

	/* Count pages */
	$limit = 5; 
	$cur = ($start - 0);
	$this1 = $cur + $limit;
	$back = $cur - $limit;
	$next = $cur + $limit;

	/* Add category if set */
	if(isset($_GET['cat']) && $_GET['cat'] != "") {
		$cat = $_GET['cat'];
	}
	else $cat = "%";

	/* Create search query string */
	$query = "SELECT * FROM Books WHERE (isbn LIKE '%$search%' 
												OR bookTitle LIKE '%$search%' 
												OR author LIKE '%$search%' 
												OR year LIKE '%$search%') 
												AND categoryID LIKE '$cat'";

	$search_result = mysql_query($query);
	$num_rows = mysql_num_rows($search_result);

	/* If no results found */
	if($num_rows<1) {
		echo '<tr><td colspan="6">No Results</td></tr>';
		echo "</table>";
	}

	/* Limit results to only rows which are relevant */
	$search_result = mysql_query($query." LIMIT $cur, $limit");


	/* Create searc hresults table */
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
			echo "<input type='hidden' name='reserve' value='$row[0]'>";
			echo "<input type='submit' name='button' value='Reserve'></form>";
		}
		else echo "Not available";
		echo("</td></tr>");
	}
	echo "</table>";

	/* Links to next and previous sets of results */
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