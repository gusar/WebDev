<?php
if(isset($_POST['register'])) {
	// Check if all required fields have been filled 
	if($_POST["rusername"] && $_POST["rpassword1"] 
		&& $_POST["rpassword2"] && $_POST["rfirstname"]
		&& $_POST["rsurname"] && $_POST["raddressline1"]
		&& $_POST["rcity"] && $_POST["rtelephone"])
	{
		// Check if the two passwords match
		if($_POST["rpassword1"] == $_POST["rpassword2"])
		{
			include("connectDB.php");

			$query = "SELECT username FROM Users WHERE username LIKE '$_POST[rusername]'";
			$result = mysql_query($query, $conn) or die(mysql_error());
			if(mysql_num_rows($result) < 1) {

				// Insert into database and check if successful
				$query = "INSERT INTO Users VALUES (
								'$_POST[rusername]', 
								'$_POST[rpassword1]', 
								'$_POST[rfirstname]', 
								'$_POST[rsurname]', 
								'$_POST[raddressline1]', 
								'$_POST[raddressline2]', 
								'$_POST[rcity]', 
								'$_POST[rtelephone]', 
								'$_POST[rmobile]')";
				$result = mysql_query($query, $conn) or die(mysql_error());

				mysql_close($conn);
				header("location: login.php?r=1");
			}
			else print "Error: That username already exists";
		}
		else print "Error: Passwords don't match";
	}
	else print"Error: Enter all information marked with *";
}
?>