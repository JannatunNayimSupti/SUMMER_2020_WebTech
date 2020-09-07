<?php 
	session_start();
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){
		$employename =$_POST['name'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$contact 		= $_POST['number'];
		$companyname =$_POST['companyname'];

		if(empty($employename) || empty($username) || empty($password) || empty($contact)||empty($companyname)){
			header('location: ../views/registration.php?error=null_value');
			//echo "invalid";
		}
		else
		{

			$user = [
				'name' =>$employename,
				'username'=> $username,
				'password'=> $password,
				'number'=> $contact,
				'companyname' =>$companyname,
			];

			$status = insert($user);
			if($status){
				header('location: ../views/login.php?success=registration_done');
			}else{
				header('location: ../views/registration.php?error=db_error');
			}
		
	



?>