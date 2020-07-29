<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
  <tr>
    <td colspan="2" width="800px"><h1>Xcompany</h1> 
      <ul align="right">
        <a href="publicHome.php">Home</a>|
        <a href="login.php">Login</a>|
        <a href="registration.php">Registration</a>
      </ul>
    </td>
  </tr>
  <tr height="250px">
    <td>
      <form action="logcheck.php" method="post">
        <fieldset width="600px">
          <legend>LOGIN</legend>
          <table>
            <tr>
              <td>User Name</td>
              <td>: <input type="text" name="name"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td>: <input type="Password" name="pass"></td>
            </tr>
          </table>
          <hr>
          <input type="submit" name="submit"><a href="forgotPassword.php">Forgot Password</a>
        </fieldset>
      </form>
    </td>
  </tr>
  <tr>
    <td align="center">copyright@2015</td>
  </tr>
</table>
</body>
</html>