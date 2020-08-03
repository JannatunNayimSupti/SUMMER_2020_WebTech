<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
	<fieldset>

  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
  <tr>
    <td width="800px"><h2></h2> 

    </td>
  </tr>
  <tr height="500px">
    <td>
      <form>
        <fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form action="registrationCheck.php" method="post">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text"></td>
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
				<td>User Name</td>
				<td>:</td>
				<td><input name="userName" type="text"></td>
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
					<fieldset>
						 <label for="UserType:">UserType</label>
     <select>
           <option value="">Admin</option>
      <option value="">Manager</option>
      <option value="">Customer</option>
      
     </select>
     <hr>
     <input type="submit" value="Submit">

					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit">
		<input type="submit" value= "login">
	</form>
</fieldset>
      </form>
    </td>
  </tr>
  <tr>
    <td ></td>
  </tr>
</table>
</fieldset>
</body>
</html>