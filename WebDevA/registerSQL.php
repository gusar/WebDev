<?php
if(isset($_POST['register'])) {
	$value = validate();

	switch($value) {
		case 0:
			header("location: login.php?r=1");
			break;
		case 1:
			print"Error: Enter all information marked with *";
			break;
		case 2:
			print "Error: Phone numbers must be numeric";
			break;
		case 3:
			print "Error: Passwords don't match or too long";
			break;
		case 5:
			print "Error: That username already exists";
	}
}


function validate() {
	// Check if all required fields have been filled 
	if(!$_POST["rusername"] || !$_POST["rpassword1"] 
		|| !$_POST["rpassword2"] || !$_POST["rfirstname"]
		|| !$_POST["rsurname"] || !$_POST["raddressline1"]
		|| !$_POST["rcity"] || !$_POST["rtelephone"])
	{
		return(1);
	}

	// Check if phone numbers are numeric
	if(!preg_match("#[0-9]+#",$_POST["rtelephone"])) {
		return(2);
	}

	if($_POST["rmobile"] && !preg_match("#[0-9]+#",$_POST["rmobile"])) {
		return(2);
	}
	
	// Check if the two passwords match and are under 6 chars long
	if($_POST["rpassword1"] != $_POST["rpassword2"]) {
		return(3);
	}
	
	include("connectDB.php");

	$query = "SELECT username FROM Users WHERE username LIKE '$_POST[rusername]'";
	$result = mysql_query($query, $conn) or die(mysql_error());

	if(mysql_num_rows($result) > 1) {
		return(4);
	}

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
	return(0);
}
?>