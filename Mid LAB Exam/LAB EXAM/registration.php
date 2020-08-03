<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form action="registrationCheck.php" method="POST">
		<br/>
		<table width="80%" cellpadding="0" cellspacing="0">	
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text"></td>
				<td></td>
			</tr>

			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>ID</td>
				<td>:</td>
				<td>
					<input name="userId" type="text">
				</td>
				<td></td>
			</tr>		

			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="pass" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					User Type
			        <select name="userType">
			        	<option>Admin</option>
			        	<option>User</option>
			        </select>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit" name="submit">
		<a href="login.php">Login</a>
	</form>
</fieldset>
