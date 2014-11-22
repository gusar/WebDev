<?php include("header.php"); ?>

<div>
	<form action="register.php" method="post">

		<h2 style="text-align:center">Registration</h2>

		
		<p><?php include("registerSQL.php"); ?></p>

		<table id="register-table" border="0">
			<tr>
				<td>Username:</td>
				<td><input name="rusername" type="text" ></input> *</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input name="rpassword1" type="password"></input> *</td>
			</tr>
			<tr>
				<td>Retype Password:</td>
				<td><input name="rpassword2" type="password"></input> *</td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input name="rfirstname" type="text"></input> *</td>
			</tr>
			<tr>
				<td>Surname:</td>
				<td><input name="rsurname" type="text"></input> *</td>
			</tr>
			<tr>
				<td>Address Line 1:</td>
				<td><input name="raddressline1" type="text"></input> *</td>
			</tr>
			<tr>
				<td>Address Line 2:</td>
				<td><input name="raddressline2" type="text"></input></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input name="rcity" type="text"> *</input></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input name="rtelephone" type="text"> *</input></td>
			</tr>
			<tr>
				<td>Mobile:</td>
				<td><input name="rmobile" type="text"></input></td>
			</tr>
			<tr><td colspan="2" id="reg-submit">
				<input type="submit" name="register" value="Register"></input>
			</td></tr>
		</table>

	</form>		
</div>
</body>
</html>