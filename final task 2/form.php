<?php
if(isset($_POST['submit']))
{
	echo "Name: ".$_POST['name']."<br>";
	echo "Email: ".$_POST['email']."<br>";
	echo "Gender: ".$_POST['gender']."<br>";
	echo "Date_Of_Birth: ".$_POST['date']."/".$_POST['month']."/".$_POST['year']."<br>";
	echo "Blodd_Group: ".$_POST['bg']."<br>";
	if(!empty($_POST['ssc']))
	{
		echo $_POST['ssc']." "."<br>";
	}
	if(!empty($_POST['hsc']))
	{
		echo $_POST['hsc']." "."<br>";
	}
	if(!empty($_POST['bsc']))
	{
		echo $_POST['bsc']." "."<br>";
	}
	//echo $_POST['name'];
	echo "Picture: ".$_POST['upload'];

}
?>