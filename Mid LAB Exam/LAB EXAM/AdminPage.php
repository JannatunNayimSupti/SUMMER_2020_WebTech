<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr >
    <td colspan="2" width="900px"><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="profile.php"><?=$_COOKIE['name']?></a>|
        <a href="logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr height="300px">
  	<td colspan="2" align="center">
  		<h1>
            Welcome <?=$_COOKIE['name']?>      
      </h1>
			<p><a href="profile.php"> Profile</a></p>
			<p><a href="changePassword.php"> Change Password </a></p>
			<p><a href="viewUser.php"> View User </a></p>
			<p><a href="logout.php"> Logout </a> </p>
	</td>
  </tr>

  <tr>
	  <td colspan="2" align="center">copyright@2017</td>
  </tr>
</table>
</body>
</html>