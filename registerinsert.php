<?php
include('session.php');

	$con=mysqli_connect('localhost','root','');
	if(!$con)
	{
		echo 'Not connected to server';
	}

	if(!mysqli_select_db($con,'jeca'))
	{
		echo 'Database not selected';
	}  
	if(isset($_POST['submitform']))
	{
	
		$rollno= $_POST ['rollno'];
		$candidatename= $_POST ['candidatename'];

		$sql ="INSERT INTO counsellingstudents (rollno) VALUES ('$rollno') ";
	}





?>