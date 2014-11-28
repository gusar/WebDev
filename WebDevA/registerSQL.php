<?php
/* Execute if user presses register button */
if(isset($_POST['register'])) {
	$value = validate();

	/* Check if an error occured */
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
		case 4:
			print "Error: Username must be under 20 characters long";
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

	$user = $_POST["rusername"];
	$pass1 = $_POST["rpassword1"];
	$pass2 = $_POST["rpassword2"];
	$tel = $_POST["rtelephone"];
	if($_POST["rmobile"]) $mobile = $_POST["rmobile"];

	// Check if phone numbers are numeric or too long
	if(!is_numeric($tel) || strlen($tel) > 10) {
		return(2);
	}

	if(isset($mobile)) { 
		if(!is_numeric($mobile) || strlen($mobile) > 10) {
			return(2);
		}
	}
	
	// Check if the two passwords match and are under 6 chars long
	if($pass1 != $pass2 || strlen($pass1)>6) {
		return(3);
	}

	// Check if username is under 20 chars
	if(strlen($user) > 20) {
		return(4);
	}
	
	include("connectDB.php");

	$query = "SELECT username FROM Users WHERE username LIKE '$user'";
	$result = mysql_query($query, $conn) or die(mysql_error());

	if(mysql_num_rows($result) > 0) {
		return(5);
	}

	// Insert into database and check if successful
	$query = "INSERT INTO Users VALUES (
					'$user', 
					'$pass1', 
					'$_POST[rfirstname]', 
					'$_POST[rsurname]', 
					'$_POST[raddressline1]', 
					'$_POST[raddressline2]', 
					'$_POST[rcity]', 
					'$tel', 
					'$mobile')";
	$result = mysql_query($query, $conn) or die(mysql_error());

	mysql_close($conn);
	return(0);
}
?>