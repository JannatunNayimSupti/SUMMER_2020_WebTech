
<?php
	session_start();
	session_destroy();
	setcookie('status', "OK", time()-3600, '/');
	header('location: login.php');
?>

