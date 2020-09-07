<?php 
	session_start();
	require_once('../userservice/userService.php');


	if(isset($_POST['number'])){

		$status=checknumber($_POST['number']);
		if($status)
		{
			echo "number is given !!";
		}		
	}

?>