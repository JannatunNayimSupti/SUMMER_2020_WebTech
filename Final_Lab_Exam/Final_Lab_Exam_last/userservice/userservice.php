<?php
	function insert($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into employer values('','{$user['name']}','{$user['username']}','{$user['password']}', '{$user['number']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>