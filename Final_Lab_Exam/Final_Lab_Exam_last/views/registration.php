<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<script type="text/javascript" src="../assets/registration.js"></script>
</head>
<body>

	<form name="myform" action="../php/registrationCheck.php" method="post" onsubmit="return val()">
		<fieldset>
			<legend colspan="3" align="center" height="30%">SignUp</legend>
			<table  border="1" width="100%" height="90%">
				<tr>
					<td  width="20%">Employe Name</td>
					<td width="30px"><input type="text" id="name" name="name" onkeyup="removeremployename()"></td>
					<td width="5%" id="employenamemsg"></td>
				</tr>
				<tr>
					<td  width="20%">Contact Number</td>
					<td  width="30px"><input type="text" id="number" name="number" onkeyup="removernumber()"></td>
					<td width="5%" id="numbermsg"></td>
				</tr>
				<tr>
					<td  width="20%">UserName</td>
					<td  width="30px"><input type="text" id="username" name="username" onkeyup="removername()"></td>
					<td width="5%" id="usernamemsg"></td>
				</tr>
				<tr>
					<td  width="20%">Company Name</td>
					<td  width="30px"><input type="text" id="companyname" name="username" onkeyup="removercompanyname()"></td>
					<td width="5%" id="commsg"></td>
				</tr>
				<tr>
					<td  width="20%">Password</td>
					<td  width="30px"><input type="password" id="password" name="password" onkeyup="removerpassword()"></td>
					<td width="5%" id="passwordmsg"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit">
						<input type="reset" name="" value="Clear"> 
						<a href="login.php">Login</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
	
</body>
</html>