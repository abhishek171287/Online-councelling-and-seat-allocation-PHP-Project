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
	if(isset($_POST['Submit']))
	{
	
		$District= $_POST ['district'];

		$sql ="INSERT INTO examdistrict (ExamDistrict) VALUES ('$District') ";

	}
	if(!mysqli_query($con,$sql))
		{
		echo 'Not Inserted';
		}

		else
		{
		echo 'Inserted';
		header("refresh:1; url=addcounsellingdistrict.html");
		}
?>
