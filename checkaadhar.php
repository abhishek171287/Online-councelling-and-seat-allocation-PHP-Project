<?php
/*include 'conn.php';*/
include('dbconfig.php');


if(isset($_POST["aadhar"]) && !empty($_POST["aadhar"]))
{

			$aadhar=$_POST['aadhar']; 

	$query=$db->query("SELECT * FROM  councellingstudents where aadhar='$aadhar'");
	 $rowCount=$query->num_rows;
	 if($rowCount>0)
	 {
	 	
	 	echo "<script type='text/javascript'>alert('Aadhar No. Is Already used');location.reload(true);</script>";
		header("refresh:1; url=register.php");
	 } 
	 else
	 {
	 	echo 'Aadhar Number is not used yet';
	 }
	 
}	 
?>