<?php
if(isset($_POST['return']) || isset($_POST['reserve'])) {
	include("connectDB.php");

	if(isset($_POST['return'])) {
		$id = $_POST['return'];
		$action = "N";
		$query2 = "DELETE FROM Reservations WHERE reserved_isbn LIKE '$id'";
	}

	elseif(isset($_POST['reserve'])) {
		$id = $_POST['reserve'];
		$action = "Y";
		$query2 = "INSERT INTO Reservations VALUES ('$id', '$_SESSION[user]', CURDATE())";
	}

	$query1 = "UPDATE Books SET reserved='$action' WHERE isbn LIKE '$id'";

	mysql_query($query1);
	mysql_query($query2);

	mysql_close($conn);

	if(basename($_SERVER['PHP_SELF']) == "main.php") header("location: main.php");
}
?>