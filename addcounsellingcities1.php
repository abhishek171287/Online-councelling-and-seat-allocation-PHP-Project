<?php
include('session.php'); 
	 $link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"jeca");

	$District= $_POST ['districtselected'];

	$City=$_POST ['city'];
		
	

	$sql ="INSERT INTO councellingcities (district,city) VALUES ('$District','$City') ";

	if(!mysqli_query($link,$sql))
	{
		echo 'Not Inserted.Select exam district';
		header("refresh:1; url=addcounsellingcities.php");
	}

	else
	{
		echo 'Inserted';
		header("refresh:1; url=addcounsellingcities.php");
	}
?>
