<?php  
	include("connectDB.php");

	if(isset($_POST['submit'])) {
		Login();
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			header("location: index.php");
		}
		else header("location: login.php");
	}

	function Login() {
		session_start();
		$_SESSION['loggedin'] = false;

		$LUSER = $_POST['user'];
		$LPASS = $_POST['pass'];

		if(!empty($LUSER)) {
			$query = mysql_query("SELECT * FROM Users 
										WHERE username = '$LUSER' 
										AND password = '$LPASS'");
			$rows = mysql_num_rows($query);

			if($rows == 1) {
				$_SESSION['user'] = $LUSER;
				$_SESSION['loggedin'] = true;
			}
		}
	}
	
	mysql_close($conn);
?>