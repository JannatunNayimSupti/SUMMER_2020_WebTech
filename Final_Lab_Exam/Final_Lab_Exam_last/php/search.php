<?php

	$name = $_POST['name'];

	$conn = mysqli_connect('localhost', 'root', '', 'ajax');
	$sql= "select * from employetable where username like '%{$username}%'";

	$result = mysqli_query($conn, $sql);

	$data = "<table border=1> 
				<tr>
					<td>ID</td>
					<td>Username</td>
					<td>ContactNumber</td>
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
			$data .= "<tr>
							<td>{$row['id']}</td>
							<td>{$row['username']}</td>
							<td>{$row['contactnumber']}</td>
					</tr>";
	}

	$data .= "</table>";

	echo $data;

?>