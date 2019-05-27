<?php
/*include 'conn.php';*/
include('dbconfig.php');


if(isset($_POST["email"]) && !empty($_POST["email"]))
{

			$email=$_POST['email']; 

	$query=$db->query("SELECT * FROM  councellingstudents where email='$email'");
	 $rowCount=$query->num_rows;
	 if($rowCount>0)
	 {
	 	
	 	echo "<script type='text/javascript'>alert('Email Is Already used');location.reload(true);</script>";
		header("refresh:1; url=register.php");
	 } 
	 else
	 {
	 	echo 'Email is not used yet';
	 }
	 
}	 
?>